<?php
if ( ! defined('ABSPATH') ) {
   exit; // Exit if accessed directly
}
if (!class_exists('GF_Google_Sheet_Connector_Settings')) {
    class GF_Google_Sheet_Connector_Settings
    {
        public function __construct(){
            //add_action('admin_enqueue_scripts',array($this,'enqueue_scripts'));
        	add_filter( 'gform_tooltips', array($this,'add_tooltips' ),10,1);

        	add_filter( 'gform_settings_menu', array($this,'gform_settings_menu_callback'), 10, 1 );
            add_action( 'gform_settings_gfgs_connector_settings',array($this, 'gform_settings_page_gfgs_connector_settings_callback' ));

            add_filter( 'gform_form_settings_menu', array($this,'gfgs_settings_menu' ));
            add_action( 'gform_form_settings_page_wpgfgs_connector_page',array($this, 'gfgs_connector_page_settings_page' ));
        	
        	//add_action('gfgs_form_settings_updated', array($this,'update_columns'));
        	add_action('gfgs_synchronize_form_entries',array($this,'synchronize_form_entries'),10,3);
			add_action( 'gform_after_update_entry', array($this,'update_entry'), 10, 2 );
			
			add_action( 'wp_ajax_sync_entries_spreadsheet', array($this,'sync_entries_spreadsheet') );
			add_filter( 'http_request_timeout', array($this, 'wp9838c_timeout_extend') );
		}
		

		public function wp9838c_timeout_extend( $time )
		{
			// Default timeout is 5
			return 120;
		}
        public function add_tooltips($tooltips){
        	$tooltips['google_sheet_enable'] =__('Enable Google Sheet Connector for this form', 'gfgsconnector');
        	$tooltips['google_sheet_name'] =__('Go to your google account and click on"Google apps" icon and than click "Sheets". Select the name of the appropriate sheet you want to link your gravity form or create new sheet.', 'gfgsconnector');
        	$tooltips['google_sheet_tab_name'] =__('Open your Google Sheet with which you want to link your gravity form . You will notice a tab names at bottom of the screen. Copy the tab name where you want to have an entry of gravity form.', 'gfgsconnector');
        	$tooltips['google_sheet_edit_update'] =__('Enable Google Sheet edit/update with form entries', 'gfgsconnector');
        	$tooltips['google_sheet_headers'] =__('Choose Google Sheet headers/column names either form field labels or custom names', 'gfgsconnector');
			$tooltips['export_google_sheet'] =__('Export associated google spreadsheet to csv.', 'gfgsconnector');
			$tooltips['google_sheet_sync_metadata'] =__('Sync Gravity forms entries metadata to google sheets.', 'gfgsconnector');
        	return $tooltips;
        }
        public function gfgs_settings_menu($menu_items){
        	$menu_items[] = array(
		        'name' => 'wpgfgs_connector_page',
		        'label' => __( 'Google Sheets' ,'gfgsconnector')
		        );
		 
		    return $menu_items;
        }
		public function getSpreadheets_remote(){


			require_once GFGS_CONNECTOR_PATH . 'lib/google-sheets.php';
			$doc = new GFGSC_googlesheet();
			$doc->auth();
			$tokenData = json_decode(get_option('gfgs_token'), true);
			
			$get_url = 'https://www.googleapis.com/drive/v3/files?q=mimeType%3D%27application%2Fvnd.google-apps.spreadsheet%27&';
			
			$headers = array(
				'Authorization' => 'Bearer '. $tokenData['access_token'],
				'Accept'        => 'application/json',
				'Content-Type' 	=> 'application/json',
			);
			
			
			$response = wp_remote_request($get_url, array(
				'method'  => 'GET',
				'headers' => $headers,
				'httpversion' => '1.0',
				'sslverify' => false
			));
			
			
			if(!empty(json_decode($response['body'])->files)){
			    return json_decode($response['body'])->files;
		    } else if(!empty(json_decode($response['body'])->error)) {
		      echo sprintf(__("Error '%s' ","gfgsconnector"),json_decode($response['body'])->error->message);
	        }
            
			
		}
        public function gfgs_connector_page_settings_page(){		
        	GFFormSettings::page_header();
        	if(!empty(get_option('gfgs_token'))){
		 	$form_id = RGForms::get('id');
			
			
			//update_option('gfgs_token', '');
		 	if(isset($_POST['gfgsbutton'])){
		 		
		 		$data= array();
		 		$fields=array();
		 		$gfgs=array();
		 		if(isset($_POST['gf-gs']) && !empty($_POST['gf-gs'])){
		 			$gfgs=$_POST['gf-gs'];
		 			$gfgs['enable']=isset($gfgs['enable']) ? 'yes' : 'no';
		 			if(isset($gfgs['conditional-logic']) && $gfgs['conditional-logic']=='yes'){
		 				if(isset($gfgs['conditions']) && !empty($gfgs['conditions']) && isset($gfgs['conditions']['label'])){
		 					for ($j=0; $j < count($gfgs['conditions']['label'])+1; $j++) { 
		 						if(empty($gfgs['conditions']['value'][$j])){
		 							unset($gfgs['conditions']['label'][$j]);
		 							unset($gfgs['conditions']['logic'][$j]);
		 							unset($gfgs['conditions']['value'][$j]);
		 						}
		 					}
		 				}
		 			}else{
		 				unset($gfgs['conditions']);
		 			}
		 		} 
		 		if(isset($_POST['gfgsfield']) && !empty($_POST['gfgsfield'])){
		 			$fields=$_POST['gfgsfield'];
		 			foreach ($fields as $key => $value) {
		 				if(empty($value))
		 				unset($fields[$key]);
		 				else
		 					$fields[$key]=trim(strtolower(preg_replace('/[^A-Z0-9_-]/i', '', $value)));
		 			}
				 }

				 $mfields = '';
				 if(isset($_POST['gfgsmfield']) && !empty($_POST['gfgsmfield'])){
					$mfields=$_POST['gfgsmfield'];
					foreach ($mfields as $key => $value) {
						if(empty($value))
						unset($mfields[$key]);
						else
							$mfields[$key]=trim(strtolower(preg_replace('/[^A-Z0-9_-]/i', '', $value)));
					}
				}
				 
				 $meta_fields['entry-id'] = 'no';
				 $meta_fields['entry-date'] = 'no';
				 $meta_fields['source-url'] = 'no';
				 $meta_fields['transaction-id'] = 'no';
				 $meta_fields['payment-amount'] = 'no';
				 $meta_fields['payment-date'] = 'no';
				 $meta_fields['payment-status'] = 'no';
				 $meta_fields['post-id'] = 'no';
				 $meta_fields['user-agent'] = 'no';
				 $meta_fields['user-ip'] = 'no';

				 if(isset($_POST['gfgsmetafield']) && !empty($_POST['gfgsmetafield'])){
					
					foreach($_POST['gfgsmetafield'] as $key => $value){
						if($value == 'on'){
							$meta_fields[$key] = 'yes';
						}
					}
				 }
				
				 $gfgs['sync-metadata-fields']=isset($_POST['gfgs']['sync-metadata-fields']) ? 'yes' : 'no';


		 		$data['gfgs']=$gfgs;
				$data['fields']=$fields;
				$data['mfields']=$mfields;
				$data['gfgsmetafield']=$meta_fields;
				$data['gfgs']['sheet-name'] = $gfgs['sheet-name'];
		 		update_option('gfgs_google_sheet_connector_fields_'.$form_id,$data);
		 		//do_action('gfgs_form_settings_updated',$form_id);
		 	}
		 	if(isset($_POST['gfgs_update_columns'])){
		 		$this->update_columns($form_id);
		 		//do_action('gfgs_form_settings_updated',$form_id);
		 	}
		 
		$data=get_option('gfgs_google_sheet_connector_fields_'.$form_id);
		
		// require_once GFGS_CONNECTOR_PATH . 'lib/google-sheets.php';
		/* $doc = new GFGSC_googlesheet();
		$doc->auth();
		$spreadsheets=$doc->getSpreadheets();
		$spreadsheet=''; */
		$spreadsheet='';
		$spreadsheets= $this->getSpreadheets_remote();
		?>
		    <form method="post" action="">
	         <div class="gs-fields">
	            <h3><span><i class="fa fa-cogs"></i> <?php echo esc_html( __( 'Google Sheet Settings', 'gsconnector' ) ); ?></span></h3>
	            <table class="form-table gfgs" >
            	<tr valign="top">
					<th scope="row">
						<label for="gfgs-enable"><?php esc_html_e( 'Enable For This Form', 'gfgsconnector' ); ?></label>  <?php gform_tooltip( 'google_sheet_enable' ) ?>
					</th>
					<td>
						<label>
	               <input type="checkbox" name="gf-gs[enable]" id="gfgs-enable" 
	                      value="yes" <?php echo ( isset ( $data['gfgs']['enable'] ) &&  $data['gfgs']['enable']=='yes') ? 'checked' : ''; ?>/> <?php echo __('Enable Google Sheet Connector for this form', 'gfgsconnector'); ?></label>
		            </td>
		        </tr>
				<tr valign="top">
					<th scope="row">
						<label for="gfgs-sheet-name"><?php esc_html_e( 'Google Spreadsheet Name', 'gfgsconnector' ); ?></label>  <?php gform_tooltip( 'google_sheet_name' ) ?>
					</th>
					<td>
					<p>

					<select name="gf-gs[sheet-name]" id="select_spread_sheet">
					    <option value=""><?php _e("Select spread sheet","gfgsconnector"); ?></option>
					    <?php 
						if(!empty($spreadsheets)): 
					     foreach($spreadsheets as $key => $sheet){
							 
							 
					
						
				           $sheet=(array)$sheet;
						
				           // $sheetArr=(array)current($sheet);
				          // if(isset ( $data['gfgs']['sheet-name'] ) && $data['gfgs']['sheet-name']==$sheet['name']) 
				          	// $spreadsheet=$sheetArr['id'];
				           echo '<option value="'.$sheet['id'].'" '.( (isset ( $data['gfgs']['sheet-name'] ) && $data['gfgs']['sheet-name']==$sheet['id']) ? 'selected' : '').'>'.$sheet['name'].'</option>'; 
				        }
				        endif; ?>
					</select>
					</p>
					<p>
	               <!-- <input type="text" name="gf-gs[sheet-name]" id="gfgs-sheet-name" class="fieldwidth-3" 
	                      value="<?php //echo ( isset ( $data['gfgs']['sheet-name'] ) ) ? esc_attr( $data['gfgs']['sheet-name'] ) : ''; ?>"/>
		           </p> -->
		           <!--<p>
		               <button name="create_sheet" id="create_spread_sheet" class="button-primary"><?php //_e('Create new spreadsheet','gfgsconnector'); ?></button>
		           </p>-->
		            </td>
		        </tr>
	            <tr valign="top">
					<th scope="row">
	               <label for="gfgs-sheet-tab-name"><?php echo esc_html( __( 'Google Sheet Tab Name ', 'gfgsconnector' ) ); ?></label> <?php gform_tooltip( 'google_sheet_tab_name' ) ?>
		           </th>
		           <td>

	               <input type="text" name="gf-gs[sheet-tab-name]" id="gfgs-sheet-tab-name" class="fieldwidth-3" 
	                      value="<?php echo ( isset ( $data['gfgs']['sheet-tab-name'] ) ) ? esc_attr( $data['gfgs']['sheet-tab-name'] ) : ''; ?>"/>
		            </td>
		        </tr>
		        <tr valign="top">
					<th scope="row">
						<label for="gfgs-enable-edit-update"><?php esc_html_e( 'Edit/Update Entries', 'gfgsconnector' ); ?></label>  <?php gform_tooltip( 'google_sheet_edit_update' ) ?>
					</th>
					<td>
						<label>
	               <input type="checkbox" name="gf-gs[edit-update]" id="gfgs-enable-edit-update" 
	                      value="yes" <?php echo ( isset ( $data['gfgs']['edit-update'] ) &&  $data['gfgs']['edit-update']=='yes') ? 'checked' : ''; ?>/> <?php echo __('Enable Google Sheet edit/update with form entries', 'gfgsconnector'); ?></label>
		            </td>
		        </tr>
		        <tr valign="top">
					<th scope="row">
						<label for="gfgs-sheet-headers"><?php esc_html_e( 'Google sheet headers', 'gfgsconnector' ); ?></label>  <?php gform_tooltip( 'google_sheet_headers' ) ?>
					</th>
					<td>
						<label>
	               <input type="radio" name="gf-gs[sheet-headers]" id="gfgs-sheet-headers-inherit" 
	                      value="inherit" <?php echo ( isset ( $data['gfgs']['sheet-headers'] ) &&  $data['gfgs']['sheet-headers']=='inherit') ? 'checked' : ''; ?>/> <?php echo __('Use form field labels', 'gfgsconnector'); ?></label>
	                      <label>
	               <input type="radio" name="gf-gs[sheet-headers]" id="gfgs-sheet-headers-custom" 
	                      value="custom" <?php echo ( isset ( $data['gfgs']['sheet-headers'] ) &&  $data['gfgs']['sheet-headers']=='custom') ? 'checked' : ''; ?>/> <?php echo __('Use custom names', 'gfgsconnector'); ?></label>
		            </td>
		        </tr>
				<tr valign="top">
					<th scope="row">
						<label for="gfgs-sync-metadata-fields"><?php esc_html_e( 'Sync Metadata', 'gfgsconnector' ); ?></label>  <?php gform_tooltip( 'google_sheet_sync_metadata' ) ?>
					</th>
					<td>
						<label>
	               <input type="checkbox" name="gfgs[sync-metadata-fields]" id="gfgs-sync-metadata-fields" 
	                      <?php echo ( isset ( $data['gfgs']['sync-metadata-fields'] ) &&  $data['gfgs']['sync-metadata-fields']=='yes') ? 'checked' : ''; ?>/> <?php echo __('Enable Sync Metadata fields with google sheets', 'gfgsconnector'); ?></label>
		            </td>
		        </tr>
		        <tr class="custom-fields" <?php echo ( isset ( $data['gfgs']['sheet-headers'] ) &&  $data['gfgs']['sheet-headers']=='inherit') ? 'style="display:none;"' : ''; ?>>
		        	<td colspan="2">
		        		<h2><?php echo __("Assign Google Sheet Column names for Field name","gfgsconnector") ?></h2>
		        		<hr>
		        		<p><?php echo __("Note: In order to send form data after submission to google sheet please 
		        			specify column names of google sheet against each form field you want to send value. 
		        		Leave empty if you don't want to send value of any field to google sheet. Below are all fields available in your form.","gfgsconnector"); ?></p>
		        	</td>
		        </tr>
		        <?php  
		         $form = RGFormsModel::get_form_meta($form_id);
						
                    if(isset($form['fields']) && count($form['fields'])):
                    	$selected=''; $labels='';
                    	foreach ($form['fields'] as $key => $value) {
                            if(!empty($value['label'])): /// field labels
	                            if(isset($value['inputs']) && is_array($value['inputs'])){

	                                foreach ($value['inputs'] as $inputskey => $inputsvalue) {                                    
	                                    if(isset($inputsvalue['isHidden']) && $inputsvalue['isHidden']==1)
	                                        continue;
	                                    
	                                    echo '<tr class="custom-fields" '. (( isset ( $data['gfgs']['sheet-headers'] ) &&  $data['gfgs']['sheet-headers']=='inherit') ? 'style="display:none;"' : '').'>';
	                               		echo '<th><label>'.sprintf(__("Enter google sheet column name for field '%s' ","gfgsconnector"),$inputsvalue['label']).'</label></th>';
	                               		echo '<td><input type="text" class="fieldwidth-3" name="gfgsfield['.$inputsvalue['id'].']" value="'.((isset($data['fields'][$inputsvalue['id']])) ? esc_attr($data['fields'][$inputsvalue['id']]) :'').'"></td>';
	                                	echo '</tr>';
	                                }
	                            }
	                            else{
	                               
	                               echo '<tr class="custom-fields" '. (( isset ( $data['gfgs']['sheet-headers'] ) &&  $data['gfgs']['sheet-headers']=='inherit') ? 'style="display:none;"' : '').'>';
	                               echo '<th><label>'.sprintf(__("Enter google sheet column name for field '%s' ","gfgsconnector"),$value['label']).'</label></th>';
	                               echo '<td><input type="text" class="fieldwidth-3" name="gfgsfield['.$value['id'].']" value="'.((isset($data['fields'][$value['id']])) ? esc_attr($data['fields'][$value['id']]) :'').'">';
	                               echo '</tr>';
                                }
                           endif; /// field labels
                           $selected='';
						}
						
						echo '<tr class="gfgs-meta-fields">';
                   		echo '<td colspan="2"> <h2>'.__("Metadata Fields (Check to enable the fields you want to sync)","gfgsconnector").'</h2></td>';
						echo '</tr>';
					if (is_array($data) || is_object($data))
					{
						foreach($data['gfgsmetafield'] as $key => $value){
							echo '<tr class="gfgs-meta-fields">';
							echo '<th><label>';
							echo '<input type="checkbox" name="gfgsmetafield['.$key.']" id="gfgsmetafield-'.$key.'" 
						 '. (( isset ( $data['gfgsmetafield'][$key] ) &&  $data['gfgsmetafield'][$key]=='yes') ? 'checked' : '').'/>';
							echo __(ucwords(str_replace('-', ' ', $key)), 'gfgsconnector');
							echo '</label></th>';
							echo '<td><input type="text" class="fieldwidth-3" placeholder="Enter your custom header for '. ucwords(str_replace('-', ' ', $key)) .' here" name="gfgsmfield['.$key.']" value="'.((isset($data['mfields'][$key])) ? esc_attr($data['mfields'][$key]) : '').'">';
							echo '</tr>';
							
						}
					}
					
                    echo '<tr>';
                    echo '<td colspan="2"><input type="submit" class="button-primary"  name="gfgs_update_columns" value="'.__("Update Spreadsheet Headers","gfgsconnector").'">
                    	<p>'.__("Note: Please save settings before update columns.","gfgsconnector").'</p></td>';
                    echo '</tr>';
                	else: 
                        _e('No form fields are added yet!','gfgsconnector');
                    endif;
		        ?>
		        <tr>
		           <td colspan="2"><h2><?php echo __("Synchronise all entries","gfgsconnector") ?></h2><hr></td>
		        </tr>
		        <tr>
		        	<td colspan="2">
		        	    <input type="button" class="button-primary" value="<?php _e('Sync All Entries','gfgsconnector'); ?>" name="sync-entries-spreadsheet" id="sync-entries-spreadsheet">
						<br>
						<br>
						<span id="entries-synced"></span>
		        	    <p><?php echo __("Note: Click to Sync All Entries button will write all entris to defined spreedsheet for this form.","gfgsconnector"); ?></p>
		        	</td>
		        </tr>
		        <tr>
		           <td colspan="2"><h2><?php echo __("Export to CSV","gfgsconnector") ?></h2><hr></td>
		        </tr>
		        <tr>
		           <td><label><?php echo __("Export to CSV ","gfgsconnector") ?></label><?php gform_tooltip( 'export_google_sheet' ) ?></td>
		           <td><?php if(!empty($spreadsheet) && isset ( $data['gfgs']['sheet-name'] ) && !empty($data['gfgs']['sheet-name'] )){ 
		           	$spreadsheet=explode('/', $spreadsheet);
		           	?>
		           		<a href="https://docs.google.com/spreadsheets/d/<?php echo end($spreadsheet);?>/gviz/tq?tqx=out:csv&sheet=<?php echo ( isset ( $data['gfgs']['sheet-name'] ) ) ? esc_attr( $data['gfgs']['sheet-name'] ) : ''; ?>" class="button-primary"><?php _e("Export CSV","gfgsconnector"); ?></a></td>
		        		<?php }else{
		        			echo __("Save settings first.","gfgsconnector");
		        		} ?>
		        </tr>
		        <tr>
		           <td colspan="2"><h2><?php echo __("Conditional Logic","gfgsconnector") ?></h2><hr></td>
		        </tr>
		        <tr>
		           <td><label><?php echo __("Enable Conditional Logic ","gfgsconnector") ?></label><?php gform_tooltip( 'enable_conditional_sheet' ) ?></td>
		           <td>
		           		<input type="checkbox" name="gf-gs[conditional-logic]" id="gfgs-conditional-logic" 
	                      value="yes" <?php echo ( isset ( $data['gfgs']['conditional-logic'] ) &&  $data['gfgs']['conditional-logic']=='yes') ? 'checked' : ''; ?>/>
		           	</td>
		        </tr>
		        <tr>
		           <td colspan="2">
		           	<div id="gfgs_conditional_logics" <?php echo ( isset ( $data['gfgs']['conditional-logic'] ) &&  $data['gfgs']['conditional-logic']=='yes') ? '' : 'style="display:none"'; ?>>
		           	<p>
		           		<?php _e('Submit the form to spreadsheet if any of the following match:', 'gfgsconnector'); ?>
		           	</p>
		           	<div class="conditions_body">
		           		<?php  
		           			if(( isset ( $data['gfgs']['conditional-logic'] ) &&  $data['gfgs']['conditional-logic']=='yes') &&
		           				( isset ( $data['gfgs']['conditions'] ) &&  !empty($data['gfgs']['conditions']))
		           				&& !empty($form['fields'])){ 
		           					$cnt = isset ( $data['gfgs']['conditions']['label']) ? count($data['gfgs']['conditions']['label']) : 0;
		           					for ($i=0; $i < $cnt; $i++) { ?>
		           						<p>
					           			<span><select name="gf-gs[conditions][label][]">
					           				<?php  

					           				 foreach ( $form['fields'] as $field ) {
					                            $inputs = $field->get_entry_inputs();
					                            $select='';
					                            if ( is_array( $inputs ) ) {
					                                foreach ( $inputs as $input ) {
					                                	if(isset($input['isHidden']) && $input['isHidden']==1)
					                                        continue;
					                            		$select = (isset ( $data['gfgs']['conditions']['label'][$i]) && $data['gfgs']['conditions']['label'][$i]==$input['label']) ? 'selected' : '';
					                                	echo '<option '.esc_attr($input['label']).' '.$select.'>'.$input['label'].'</option>';
					                                }
					                            } else {
					                            	$select = (isset ( $data['gfgs']['conditions']['label'][$i]) && $data['gfgs']['conditions']['label'][$i]==$field['label']) ? 'selected' : '';
					                                 echo '<option '.esc_attr($field['label']).' '.$select.'>'.$field['label'].'</option>';
					                            }
					                        }
					           				?>
					           			</select>
					           			</span>
					           			<span>
					           				<?php $logic = (isset ( $data['gfgs']['conditions']['logic'][$i])) ? $data['gfgs']['conditions']['logic'][$i] : '';  ?>
					           				<select name="gf-gs[conditions][logic][]">
					           					<option value="is" <?php echo ($logic=='is') ? 'selected' : ''; ?>><?php _e('is','gfgsconnector'); ?></option>
					           					<option value="is_not" <?php echo ($logic=='is_not') ? 'selected' : ''; ?>><?php _e('is not','gfgsconnector'); ?></option>
					           					<option value="less_than" <?php echo ($logic=='less_than') ? 'selected' : ''; ?>><?php _e('less than','gfgsconnector'); ?></option>
					           					<option value="greater_than" <?php echo ($logic=='greater_than') ? 'selected' : ''; ?>><?php _e('Greater Than','gfgsconnector'); ?></option>
					           					<option value="contains" <?php echo ($logic=='contains') ? 'selected' : ''; ?>><?php _e('Contains','gfgsconnector'); ?></option>
					           				</select>
					           			</span>
					           			<span>
					           				<?php $value = (isset ( $data['gfgs']['conditions']['value'][$i])) ? $data['gfgs']['conditions']['value'][$i] : '';  ?>
					           				<input type="text" name="gf-gs[conditions][value][]" value="<?php echo $value; ?>" placeholder="<?php _e('Enter value','gfgsconnector'); ?>">
					           			</span>
										
					           			<?php if($i == 0){?>
					           			<span class="addmore">+</span>
										<?php
										}
										else { ?>
											<span class="remove">-</span>
										<?php }
										?>
					           		</p>
		           					<?php } ?>

		           			<?php } 
							else{
							?>
		           		<p>
		           			<?php
		           				$counts = isset ( $data['gfgs']['conditions']['label']) ? count($data['gfgs']['conditions']['label']) : 0;									
								
		           			?>
		           			<?php //if($counts > 0) : ?>
		           			<span><select name="gf-gs[conditions][label][]">
		           				<?php  
		           				 foreach ( $form['fields'] as $field ) {
		                            $inputs = $field->get_entry_inputs();
		                            if ( is_array( $inputs ) ) {
		                                foreach ( $inputs as $input ) {
		                                	if(isset($input['isHidden']) && $input['isHidden']==1)
		                                        continue;
		                                	echo '<option '.esc_attr($input['label']).'>'.$input['label'].'</option>';
		                                }
		                            } else {
		                                 echo '<option '.esc_attr($field['label']).'>'.$field['label'].'</option>';
		                            }
		                        }
		           				?>
		           			</select>
		           			</span>
		           			<span>
		           				<select name="gf-gs[conditions][logic][]">
		           					<option value="is"><?php _e('is','gfgsconnector'); ?></option>
		           					<option value="is_not"><?php _e('is not','gfgsconnector'); ?></option>
		           					<option value="less_than"><?php _e('less than','gfgsconnector'); ?></option>
		           					<option value="greater_than"><?php _e('Greater Than','gfgsconnector'); ?></option>
		           					<option value="contains"><?php _e('Contains','gfgsconnector'); ?></option>
		           				</select>
		           			</span>
		           			<span>
		           				<input type="text" name="gf-gs[conditions][value][]" value="" placeholder="<?php _e('Enter value','gfgsconnector'); ?>">
		           			</span>
		           			<span class="addmore">+</span>
		           		</p>
							<?php 
							}
							//endif; ?>
		           	</div>
		           </div>
		           </td>
		        </tr>
			    </table>
	         </div>
	         <input type="hidden" value="<?php echo $form_id; ?>" name="gfgs_form_id"/>  
		    <input type="submit" name="gfgsbutton" class="button-primary gfbutton" value="Update GS Settings"/>
	      </form>
	      <style type="text/css">
	      span.addmore {
			    border: 2px solid #ccc;
			    border-radius: 50%;
			    padding: 0px 5px;
			    cursor: pointer;
			}
		 span.remove{
		 	border: 2px solid #ccc;
		    border-radius: 50%;
		    padding: 0px 7px;
		    cursor: pointer;
		 }
	      </style>
	      <script type="text/javascript">
	      	jQuery(document).ready(function(){
				jQuery('.gfgs #gfgs_conditional_logics .conditions_body p:not(:first) .span.addmore').removeClass('addmore').addClass('remove').text('-');
				jQuery('span.addmore').on('click',function(e){
			      var con = jQuery('.gfgs #gfgs_conditional_logics .conditions_body').find("p:first").clone();
			      jQuery('.gfgs #gfgs_conditional_logics .conditions_body').append(con);
				  jQuery('#gfgs_conditional_logics > div p').last().find('span.addmore').removeClass('addmore').addClass('remove').text('-');		  
				});
				
				jQuery('#gfgs-sheet-headers-inherit').on('click',function(){
			        if(jQuery(this).is(':checked')){
			            jQuery('table.gfgs tr.custom-fields').css('display','none');
			        }else{
			            jQuery('table.gfgs tr.custom-fields').css('display','table-row');
			        }
			    });
			    jQuery('#gfgs-sheet-headers-custom').on('click',function(){
			        if(jQuery(this).is(':checked')){
			            jQuery('table.gfgs tr.custom-fields').css('display','table-row');
			        }else{
			            jQuery('table.gfgs tr.custom-fields').css('display','none');
			        }
			    });
			    jQuery('#gfgs-sync-metadata-fields').on('click',function(){
			        if(jQuery(this).is(':checked')){
			            jQuery('table.gfgs tr.gfgs-meta-fields').css('display','table-row');
			        }else{
			            jQuery('table.gfgs tr.gfgs-meta-fields').css('display','none');
			        }
			    });
			    if(jQuery('#gfgs-sheet-headers-inherit').is(':checked')){
			        jQuery('table.gfgs tr.custom-fields').css('display','none');
			    }
				else{
			        jQuery('table.gfgs tr.custom-fields').css('display','table-row');
			    }
				if(jQuery('#gfgs-sheet-headers-custom').is(':checked')){
			        jQuery('table.gfgs tr.custom-fields').css('display','table-row');
			    }
				else{
			        jQuery('table.gfgs tr.custom-fields').css('display','none');
			    }
				if(jQuery('#gfgs-sync-metadata-fields').is(':checked')){
			            jQuery('table.gfgs tr.gfgs-meta-fields').css('display','table-row');
			    }
				else{
			            jQuery('table.gfgs tr.gfgs-meta-fields').css('display','none');
			    }
			    jQuery('.gfgs #select_spread_sheet').on('change',function(e){
			        var sheet = jQuery(this).val();
			        if(sheet!==''){
			          jQuery(this).closest('td').find('#gfgs-sheet-name').val(sheet);
			        }
			    });
			    jQuery('.gfgs #gfgs-conditional-logic').on('click',function(e){
			        //e.preventDefault();
			        if(jQuery(this).is(':checked')){
			          jQuery('.gfgs #gfgs_conditional_logics').show();
			        }else{
			          jQuery('.gfgs #gfgs_conditional_logics').hide();
			        }
			    });
			    jQuery(document).on('click','.gfgs #gfgs_conditional_logics span.remove',function(e){
			      jQuery(this).closest('p').remove();
				  if(jQuery('.gfgs #gfgs_conditional_logics .conditions_body p').length > 1){
					jQuery('.gfgs #gfgs_conditional_logics .conditions_body p span.remove').show();
					jQuery('.gfgs #gfgs_conditional_logics .conditions_body p:first span.remove').hide();
				  }
				  else {
					jQuery('.gfgs #gfgs_conditional_logics .conditions_body p span.remove').hide();
				  }
			    });
			    
				if(jQuery('.gfgs #gfgs_conditional_logics .conditions_body p').length > 1){
					jQuery('.gfgs #gfgs_conditional_logics .conditions_body p span.remove').show();
				  }
				  else {
					jQuery('.gfgs #gfgs_conditional_logics .conditions_body p span.remove').hide();
				  }
				
				jQuery(document).on('click','#sync-entries-spreadsheet',function(e){
					e.preventDefault();

					jQuery("#entries-synced").html("<b>Syncing Entries now please dont refresh page</b>!");
					sync_entries_with_sheet(0);
				});

					var requestSent = false;
				function sync_entries_with_sheet(page_no = 0){
					   if(!requestSent) {
						requestSent = true;
					var data = {
						'action': 'sync_entries_spreadsheet',
						'form_id': <?php echo $_GET["id"]; ?>,
						'page_no': page_no,
						'sync_entries_nonce' :'<?php echo wp_create_nonce( 'sync_entries' ); ?>'
					};
					
					// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
					jQuery.post(ajaxurl, data, function(response) {
						//console.log((response.split(',')[0]).split(':')[2]);
						if(response == 'done' ){
							jQuery("#entries-synced").html("<b>All Done</b>!");
						} else if(response == 'failed'){
							jQuery("#entries-synced").html("<b>Failed</b>!");
							
						}else if(response.includes("__")){
							response = parseInt(response.split("__").pop());
							// entries_synced = <?php echo count(GFAPI::get_entries( $_GET["id"], array(), array(), array('offset' => 0, 'page_size' => 200 )));?>;
							// jQuery("#entries-synced").html("<b>"+entries_synced+" Entries Synced</b>!");
							requestSent = false;
							sync_entries_with_sheet(response);
						}
						else if((response.split(',')[0]).split(':')[2]) {
							jQuery("#entries-synced").html((response.split(',')[1]).split(':')[1] + ' <a href="https://console.cloud.google.com/apis/api/sheets.googleapis.com/quotas" targetblank> for further details</a>');
							jQuery("#entries-synced").css('color', 'red');
						}
					});
				}
				}
				
			});
	      </script>
		    <?php
		 }else{
		 	echo __("Google authentication failed. Add Google access code. Try again.","gfgsconnector");
		 }
		    GFFormSettings::page_footer();
        }
        public function gform_settings_menu_callback($setting_tabs){
        	$setting_tabs[] = array(
		        'name' => 'gfgs_connector_settings',
		        'label' => __( 'Google Sheets' ,'gfgsconnector')
		        );
		 
		    return $setting_tabs;
        }
        public function gform_settings_page_gfgs_connector_settings_callback(){
			//update_option('gfgs_googlesheet_access_code', '');
			
			$client_id=get_option('gfgs_googlesheet_client_id',false);
			$client_secret=get_option('gfgs_googlesheet_client_secret',false);
			$access_code=get_option('gfgs_googlesheet_access_code',false);
			$connector_token=get_option('gfgs_connector_token',false);
			
			
			
			
			$get_code_url="https://accounts.google.com/o/oauth2/auth?access_type=offline&approval_prompt=force&client_id=".$client_id."&redirect_uri=".admin_url('admin.php?page=gf_settings')."&response_type=code&scope=https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.file";
		    ?>
			<script type="text/javascript">
		    var gfgs={
		    	'ajaxurl':'<?php echo admin_url("admin-ajax.php"); ?>'
		    }
		    </script>
		    <script src="<?php echo GFGS_CONNECTOR_URL.'assets/js/backend_script.js'; ?>"></script>
		    <form method="post">
		    <h3><span><i class="fa fa-cogs"></i> <?php echo esc_html( __( 'Google Sheet Connection', 'gsconnector' ) ); ?></span></h3>
		    <div class="wrap gs-form"> 
	         <div class="card" id="googlesheet">

	            <div class="">
					<p class="gs-alert"> <?php echo esc_html(__('First you will need to add Client ID and Client Secret and click save', 'gsconnector')); ?></p>
	               <p class="gs-alert"><?php echo esc_html(__('After that you will need to click "Get code" to retrieve your code from Google Drive. And paste the code in the Code field and click save again. ', 'gsconnector')); ?></p>
	               <p class="gs-alert"><?php echo esc_html(__('Need to Add below url in Authorised redirect URIs', 'gsconnector')); ?></p>
	               <p class="gs-alert redireuri"><?php echo admin_url('admin.php?page=gf_settings');?></p>
	               
				   <table>
				  
	               
				   
				   <tr>
	               	<th>
	                  <label><?php echo esc_html(__('Client ID', 'gfgsconnector')); ?></label></th>
	                <td>
	                  <input type="text" class="fieldwidth-3" name="gfgs-client-id" id="gfgs-client-id" value="<?php echo $client_id; ?>"/>
	      			</td>
	               </tr>
				   <tr>
	               	<th>
	                  <label><?php echo esc_html(__('Client Secret', 'gfgsconnector')); ?></label></th>
	                <td>
	                  <input type="text" class="fieldwidth-3" name="gfgs-client-secret" id="gfgs-client-secret" value="<?php echo $client_secret; ?>" />
	      			</td>
	               </tr>

				   <tr>
	               	<th>
	                  <label><?php echo esc_html(__('Google Access Code', 'gfgsconnector')); ?></label></th>
	                <td>
	                  <input type="text" class="fieldwidth-3" name="gfgs-code" id="gfgs-code" value="<?php echo $access_code; ?>" <?php if(empty($client_id) || empty($client_secret)){ echo "disabled";} ?> />
	      			</td>
	               </tr>
		           </table>
				  
		           	<a href="<?php echo $get_code_url; ?>" target="_blank" id="get_code_link" <?php if(empty($client_id) || empty($client_secret)){ echo 'style="pointer-events: none; cursor: default;"'; } ?>>
		           		<input type="button" name="get_code" value="<?php _e('Get Code', 'gfgsconnector'); ?>"
	                          class="button button-primary primary" /></a>
				   
					
	                <input type="submit" name="save-gfgs-code" id="save-gfgs-code" value="<?php _e('Save', 'gsconnector'); ?>"
	                          class="button button-primary primary" />
	                  <span class="loading-sign">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>

					 
	                  <label><?php echo esc_html(__('Debug Log', 'gsconnector')); ?></label>
	                  <label><a href= "<?php echo GFGS_CONNECTOR_URL.'logs/log.txt'; ?>" target="_blank" class="debug-view" >View</a></label>
					 
	               
	               <p id="gfgs-validation-message"></p>
	               <!-- set nonce -->
	               <input type="hidden" name="gs-ajax-nonce" id="gfgs-ajax-nonce" value="<?php echo wp_create_nonce('gfgs-ajax-nonce'); ?>" />

	            </div>
	         </div>
	      </div>
	  </form>
	  
		    <?php
        }
		
        public function update_columns($form_id){
        	$options=get_option('gfgs_google_sheet_connector_fields_'.$form_id);
			
			if( isset ( $options['gfgs']['enable'] ) &&  $options['gfgs']['enable']=='yes'){
                $sheetname=isset ( $options['gfgs']['sheet-name'] ) ? esc_attr( $options['gfgs']['sheet-name'] ) : '';
                $sheettab=isset ( $options['gfgs']['sheet-tab-name'] ) ? esc_attr( $options['gfgs']['sheet-tab-name'] ) : '';
                if(!empty($sheetname) && !empty($sheettab)){
                	require_once GFGS_CONNECTOR_PATH . 'lib/google-sheets.php';
                	$doc = new GFGSC_googlesheet();
					$doc->auth();
					$doc->settitleSpreadsheet($sheetname);
                    $doc->settitleWorksheet($sheettab);
					$arr=array();
					
					
                    if(isset($options['gfgs']['sheet-headers']) && $options['gfgs']['sheet-headers']=='custom' && isset($options['fields']) && !empty($options['fields'])){
						foreach ($options['fields'] as $key => $value) {
	                       array_push($arr,strtolower(preg_replace('/[^A-Z0-9_-]/i', '', $value)));
						}
						if(isset($options['gfgs']['sync-metadata-fields']) && $options['gfgs']['sync-metadata-fields'] == 'yes' && isset($options['mfields']) && !empty($options['mfields'])){
							if(isset($options['gfgsmetafield'])){
								foreach($options['gfgsmetafield'] as $key => $value){
									if($value == 'yes'){
										array_push($arr,strtolower(preg_replace('/[^A-Z0-9_-]/i', '', $options['mfields'][$key])));
									}
								}
							}
						}						
						
						
						$columns = GFFormsModel::get_grid_columns( $form_id, true );
													
						
						foreach($columns as $index => $value){
								$col = strtolower($options['fields'][$index]);
								if($col == ''){
									continue;
								}
								else {
									$header_columns[] = str_replace(' ', '', $col);
								}
						}							
							
							$meta_arr = array();
							
							if(isset($options['gfgs']['sync-metadata-fields']) && $options['gfgs']['sync-metadata-fields'] == 'yes' && isset($options['mfields']) && !empty($options['mfields'])){
								
								if(isset($options['gfgsmetafield'])){
									foreach($options['gfgsmetafield'] as $key => $value){
										if($value == 'yes'){
											array_push($meta_arr,strtolower(preg_replace('/[^A-Z0-9_-]/i', '', $options['mfields'][$key])));
										}
										
									}
								}
								
							}						

						if(isset($options['gfgs']['sync-metadata-fields']) && $options['gfgs']['sync-metadata-fields'] == 'yes' && isset($options['mfields']) && !empty($options['mfields'])){
							$header_columns = array_merge($header_columns, $meta_arr);
						}					

							$data['values'][0] = $header_columns;
							
						$spreadsheet_id = $sheetname;
						
						$access_token_data = json_decode(get_option('gfgs_token'), true);
						
						$header_range = gform_get_meta($form_id, 'header_range');

						//clear headings
								
								$headers = array(
									'Authorization' => 'Bearer '. $access_token_data['access_token'],
									'Accept'        => 'application/json',
									'Content-Type' 	=> 'application/json',
								);
								
								$result = wp_remote_post('https://sheets.googleapis.com/v4/spreadsheets/'. $spreadsheet_id .'/values/'.$sheettab.'!1:1:clear', 
								array(
									'method' => 'POST',
									'headers' => $headers,
									'httpversion' => '1.0',
									'sslverify' => false,
									'body' => '{}'
								));
							
						$url = 'https://sheets.googleapis.com/v4/spreadsheets/'. $spreadsheet_id .'/values/'.$sheettab.'!A1:append?insertDataOption=OVERWRITE&valueInputOption=RAW';
						
						$access_token_data = json_decode(get_option('gfgs_token'), true);
						
						$headers = array(
							'Authorization' => 'Bearer '. $access_token_data['access_token'],
							'Accept'        => 'application/json',
							'Content-Type' 	=> 'application/json',
						);
						
						$request = new Gfgs_Google_Sheet_Connector();
							
						$response = $request->spreadsheet_operations($url, 'POST', $data);	
						
					}else{
                    	$form = RGFormsModel::get_form_meta($form_id);
						
						
	                    if(isset($form['fields']) && count($form['fields'])):
							if(isset($options['gfgs']['sync-metadata-fields']) && $options['gfgs']['sync-metadata-fields'] == 'yes' && isset($options['mfields']) && !empty($options['mfields'])){
								
								if(isset($options['gfgsmetafield'])){
									foreach($options['gfgsmetafield'] as $key => $value){
										if($value == 'yes'){
											array_push($arr,strtolower(preg_replace('/[^A-Z0-9_-]/i', '', $options['mfields'][$key])));
										}
										
									}
								}
								
							}
							else {

								foreach ($form['fields'] as $key => $value) {
									if( $value->type == 'date' && $value->dateType == 'datedropdown' ) {
										array_push($arr,strtolower(preg_replace('/[^A-Z0-9_-]/i', '', $value['label'])));
										continue;
									}
									
									if(!empty($value['label'])): /// field labels
									if(isset($value['inputs']) && is_array($value['inputs'])){
										foreach ($value['inputs'] as $inputskey => $inputsvalue) {   
									if( $value->type == 'date' && $value->dateType == 'datedropdown' ) {
										array_push($arr,strtolower(preg_replace('/[^A-Z0-9_-]/i', '', $value['label'])));
									}
											if(isset($inputsvalue['isHidden']) && $inputsvalue['isHidden']==1)
												continue;
											array_push($arr,strtolower(preg_replace('/[^A-Z0-9_-]/i', '', $value['label'])));
										}
									}
									else{
											array_push($arr,strtolower(preg_replace('/[^A-Z0-9_-]/i', '', $value['label'])));
										
										}
								   endif; /// field labels
								}

							}								
							
								$columns = GFFormsModel::get_grid_columns( $form_id, true );
							
								foreach($columns as $index => $value){
										$col = str_replace(' ', '',strtolower($value['label']));
										$header_columns[] = $col;
								}
								
							if(isset($options['gfgs']['sync-metadata-fields']) && $options['gfgs']['sync-metadata-fields'] == 'yes' && isset($options['mfields']) && !empty($options['mfields'])){
								
								$header_columns = array_merge($header_columns,$arr);
							}
							
							$data['values'][0] = $header_columns;
						
						$spreadsheet_id =  $sheetname;
						
						$access_token_data = json_decode(get_option('gfgs_token'), true);
						
						$header_range = gform_get_meta($form_id, 'header_range');

						//clear headings
								
								$headers = array(
									'Authorization' => 'Bearer '. $access_token_data['access_token'],
									'Accept'        => 'application/json',
									'Content-Type' 	=> 'application/json',
								);
								
								$result = wp_remote_post('https://sheets.googleapis.com/v4/spreadsheets/'. $spreadsheet_id .'/values/'.$sheettab.'!1:1:clear', 
								array(
									'method' => 'POST',
									'headers' => $headers,
									'httpversion' => '1.0',
									'sslverify' => false,
									'body' => '{}'
								));
							
						
						
						$url = 'https://sheets.googleapis.com/v4/spreadsheets/'. $spreadsheet_id .'/values/'.$sheettab.'!A1:append?insertDataOption=OVERWRITE&valueInputOption=RAW';
						



						$request = new Gfgs_Google_Sheet_Connector();
							
						$response = $request->spreadsheet_operations($url, 'POST', $data);
							
						$range_str = json_decode(wp_remote_retrieve_body($response))->updates->updatedRange;
								
								$start = strpos($range_str,'A');
								$end = strpos($range_str, ':');
								
								$range_arr = explode('!', $range_str);
								
								
								gform_update_meta( $form_id,'', 'header_range', $range_arr[1] );
                        endif;
                    }
                }//sheet & sheettab
            }
        }
		public function update_entry($form, $entry_id){
			$form_id=$form["id"];
			$entry = GFAPI::get_entry( $entry_id );
			
			$options=get_option('gfgs_google_sheet_connector_fields_'.$form_id);
			
            if( isset ( $options['gfgs']['enable'] ) &&  $options['gfgs']['enable']=='yes' && isset ( $options['gfgs']['edit-update'] ) &&  $options['gfgs']['edit-update']=='yes'){
                $sheetname=isset ( $options['gfgs']['sheet-name'] ) ? esc_attr( $options['gfgs']['sheet-name'] ) : '';
                $sheettab=isset ( $options['gfgs']['sheet-tab-name'] ) ? esc_attr( $options['gfgs']['sheet-tab-name'] ) : '';
                if(!empty($sheetname) && !empty($sheettab)){
                    //&& isset($options['fields']) && !empty($options['fields'])
                    $data["entryid"] = $entry_id;
                    $data["Date"] = date_i18n( get_option( 'date_format' ));
                    $data["time"] = date_i18n( get_option( 'time_format' ) );
                    if(isset($options['gfgs']['sheet-headers']) && $options['gfgs']['sheet-headers']=='custom' && isset($options['fields']) && !empty($options['fields'])){
		                        foreach ($options['fields'] as $key => $value) {
		                            $value=strtolower(preg_replace('/[^A-Z0-9_-]/i', '', $value));
		                            $data[$value]=esc_attr(rgar( $entry, $key ));
		                        }
		            }elseif(isset($options['gfgs']['sheet-headers']) && $options['gfgs']['sheet-headers']=='inherit'){							

		                        foreach ( $form['fields'] as $field ) {
		                            $inputs = $field->get_entry_inputs();
		                            if ( is_array( $inputs ) ) {
		                                foreach ( $inputs as $input ) {
		                                    //$label=strtolower(preg_replace('/[^A-Z0-9_-]/i', '', $input['label']));
		                                    $label = strtolower(str_replace(' ', '', $input['label']));
											$data[$label] = rgar( $entry, (string) $input['id'] );
		                                    // do something with the value
		                                }
		                            } else {
		                                //$label=strtolower(preg_replace('/[^A-Z0-9_-]/i', '', $field['label']));
										$label = strtolower(str_replace(' ', '', $field['label']));
		                                $data[$label] = rgar( $entry, (string) $field->id );
		                                // do something with the value
		                            }
								}
							}


							if(isset($options['gfgs']['sync-metadata-fields']) && $options['gfgs']['sync-metadata-fields'] == 'yes' && isset($options['mfields']) && !empty($options['mfields'])){
								if(isset($options['gfgsmetafield'])){
									foreach($options['gfgsmetafield'] as $key => $value){
										if($value == 'yes'){
											// $data[$options['mfields'][$key]] = $entry[]
											switch ($key) {
												case "entry-id":
													$data[$options['mfields'][$key]] = $entry['id'];
													break;
												case "entry-date":
													$data[$options['mfields'][$key]] = $entry['date_created'];
													break;
												case "source-url":
													$data[$options['mfields'][$key]] = $entry['source_url'];
													break;
												case "transaction-id":
													$data[$options['mfields'][$key]] = $entry['transaction_id'];
													break;
												case "payment-amount":
													$data[$options['mfields'][$key]] = $entry['payment_amount'];
													break;
												case "payment-date":
													$data[$options['mfields'][$key]] = $entry['payment_date'];
													break;
												case "payment-status":
													$data[$options['mfields'][$key]] = $entry['payment_status'];
													break;
												case "post-id":
													$data[$options['mfields'][$key]] = $entry['post_id'];
													break;
												case "user-agent":
													$data[$options['mfields'][$key]] = $entry['user_agent'];
													break;
												case "user-ip":
													$data[$options['mfields'][$key]] = $entry['ip'];
													break;
												default:
											break;
											  }
										}
									}
								}
							}
                    
                    try {
                        include_once( GFGS_CONNECTOR_PATH . "lib/google-sheets.php" );
                        $doc = new GFGSC_googlesheet();
                        $doc->auth();
                        $doc->settitleSpreadsheet($sheetname);
                        $doc->settitleWorksheet($sheettab);
						
						$columns = GFFormsModel::get_grid_columns( $form_id, true );
						$header_columns = array();
						if($options['gfgs']['sheet-headers'] && $options['gfgs']['sheet-headers'] == 'custom'){
							foreach($columns as $index => $value){
								$header_columns[] = $options['fields'][$index];
							}
						}
						else {
							
							foreach($columns as $index => $value){
								$col = strtolower($value['label']);
								$header_columns[] = str_replace(' ', '', $col);
							}
						}
						
						if($options['gfgs']['sync-metadata-fields'] && $options['gfgs']['sync-metadata-fields'] == 'yes'){
							foreach($options['gfgsmetafield'] as $key => $val){
								if($val == 'yes'){
									$header_columns[] = $options['mfields'][$key];
								}
							}
						}							
								
								$updated_data = array();
								
								foreach($header_columns as $index => $val){
									$flag = false;
									foreach($data as $key => $value){
										if($key == $val){
											$flag = true;
											$updated_data[$index] = $value;
											//continue;
										}
									}
										if($flag == false){
											$updated_data[$index] = '';
										}
								}
							
						$final_data['values'][0] = array_values($updated_data);							
								
						
						$range = gform_get_meta($entry_id, 'api_response');
						
						$spreadsheet_id =  $sheetname;
						
						$url = 'https://sheets.googleapis.com/v4/spreadsheets/'. $spreadsheet_id .'/values/'.$sheettab.'!'.$range.'?valueInputOption=RAW';
						
						$access_token_data = json_decode(get_option('gfgs_token'), true);
						
						$headers = array(
							'Authorization' => 'Bearer '. $access_token_data['access_token'],
							'Accept'        => 'application/json',
							'Content-Type' 	=> 'application/json',
						);
						
						$request = new Gfgs_Google_Sheet_Connector();
						
						$response = $request->spreadsheet_operations($url, 'PUT', $final_data);
					
                    } catch (Exception $e) {
                        $data['ERROR_MSG'] = $e->getMessage();
                        $data['TRACE_STK'] = $e->getTraceAsString();
                        GFGS_Connector_log::gfgs_debug_log($data);
                    }
                }
            }
		}
		public function synchronize_form_entries($form_id, $entries, $next_page){				
			
			
			if(!empty($entries) && !empty($form_id) && is_array($entries)){
				$options=get_option('gfgs_google_sheet_connector_fields_'.$form_id);						
				
	            if( isset ( $options['gfgs']['enable'] ) &&  $options['gfgs']['enable']=='yes'){
	                $sheetname=isset ( $options['gfgs']['sheet-name'] ) ? esc_attr( $options['gfgs']['sheet-name'] ) : '';
	                $sheettab=isset ( $options['gfgs']['sheet-tab-name'] ) ? esc_attr( $options['gfgs']['sheet-tab-name'] ) : '';
	                if(!empty($sheetname) && !empty($sheettab)){
	                	$form = GFAPI::get_form( $form_id );
	                	$doc = new GFGSC_googlesheet();
                        $doc->auth();
                        $doc->settitleSpreadsheet($sheetname);
						$doc->settitleWorksheet($sheettab);
						
						foreach ($entries as $ekey => $entry) {
							# entries loop starts here
							$data["entryid"] = $entry['id'];
		                    $data["date"] = date_i18n( get_option( 'date_format' ));
		                    $data["time"] = date_i18n( get_option( 'time_format' ) );
		                    if(isset($options['gfgs']['sheet-headers']) && $options['gfgs']['sheet-headers']=='custom' && isset($options['fields']) && !empty($options['fields'])){
		                        foreach ($options['fields'] as $key => $value) {
		                            $value=strtolower(preg_replace('/[^A-Z0-9_-]/i', '', $value));
		                            $data[$value]=esc_attr(rgar( $entry, $key ));
		                        }
		                    }elseif(isset($options['gfgs']['sheet-headers']) && $options['gfgs']['sheet-headers']=='inherit'){							

		                        foreach ( $form['fields'] as $field ) {
		                            $inputs = $field->get_entry_inputs();
		                            if ( is_array( $inputs ) ) {
		                                foreach ( $inputs as $input ) {
		                                    //$label=strtolower(preg_replace('/[^A-Z0-9_-]/i', '', $input['label']));
		                                    $label = strtolower(str_replace(' ', '', $input['label']));
											$data[$label] = rgar( $entry, (string) $input['id'] );
		                                    // do something with the value
		                                }
		                            } else {
		                                //$label=strtolower(preg_replace('/[^A-Z0-9_-]/i', '', $field['label']));
										$label = strtolower(str_replace(' ', '', $field['label']));
		                                $data[$label] = rgar( $entry, (string) $field->id );
		                                // do something with the value
		                            }
								}
							}


							if(isset($options['gfgs']['sync-metadata-fields']) && $options['gfgs']['sync-metadata-fields'] == 'yes' && isset($options['mfields']) && !empty($options['mfields'])){
								if(isset($options['gfgsmetafield'])){
									foreach($options['gfgsmetafield'] as $key => $value){
										if($value == 'yes'){
											// $data[$options['mfields'][$key]] = $entry[]
											switch ($key) {
												case "entry-id":
													$data[$options['mfields'][$key]] = $entry['id'];
													break;
												case "entry-date":
													$data[$options['mfields'][$key]] = $entry['date_created'];
													break;
												case "source-url":
													$data[$options['mfields'][$key]] = $entry['source_url'];
													break;
												case "transaction-id":
													$data[$options['mfields'][$key]] = $entry['transaction_id'];
													break;
												case "payment-amount":
													$data[$options['mfields'][$key]] = $entry['payment_amount'];
													break;
												case "payment-date":
													$data[$options['mfields'][$key]] = $entry['payment_date'];
													break;
												case "payment-status":
													$data[$options['mfields'][$key]] = $entry['payment_status'];
													break;
												case "post-id":
													$data[$options['mfields'][$key]] = $entry['post_id'];
													break;
												case "user-agent":
													$data[$options['mfields'][$key]] = $entry['user_agent'];
													break;
												case "user-ip":
													$data[$options['mfields'][$key]] = $entry['ip'];
													break;
												default:
											break;
											  }
										}
									}
								}
							}							
							
		                    try {
						$columns = GFFormsModel::get_grid_columns( $form_id, true );
						$header_columns = array();
						if($options['gfgs']['sheet-headers'] && $options['gfgs']['sheet-headers'] == 'custom'){
							foreach($columns as $index => $value){
								$col = $options['fields'][$index];
								if($col == ''){
									continue;
								}
								else {
									$header_columns[] = str_replace(' ', '', $col);
								}
							}
						}
						else {
							
							foreach($columns as $index => $value){
								$col = strtolower($value['label']);
								$header_columns[] = str_replace(' ', '', $col);
							}
						}
						

						if($options['gfgs']['sync-metadata-fields'] && $options['gfgs']['sync-metadata-fields'] == 'yes'){
							foreach($options['gfgsmetafield'] as $key => $val){
								if($val == 'yes'){
									$header_columns[] = $options['mfields'][$key];
								}
							}
						}
						
								$updated_data = array();
								
								foreach($header_columns as $index => $val){
									$flag = false;
									foreach($data as $key => $value){
										if($key == $val || strpos($val, $key)!== false){
											$flag = true;
											$updated_data[$index] = $value;
											//continue;
										}
									}
										if($flag == false){
											$updated_data[$index] = '';
										}									
									
								}							

								
								$final_data['values'][0] = array_values($updated_data);
								
								$spreadsheet_id =  $sheetname;
								
								$url = 'https://sheets.googleapis.com/v4/spreadsheets/'. $spreadsheet_id .'/values/'.$sheettab.'!A2:append?insertDataOption=INSERT_ROWS&valueInputOption=RAW';
								
								$access_token_data = json_decode(get_option('gfgs_token'), true);
						
								$headers = array(
									'Authorization' => 'Bearer '. $access_token_data['access_token'],
									'Accept'        => 'application/json',
									'Content-Type' 	=> 'application/json',
								);

								$request = new Gfgs_Google_Sheet_Connector();
								
								
								$response = $request->spreadsheet_operations($url, 'POST', $final_data);								
								
								if(isset(json_decode(wp_remote_retrieve_body($response))->error)){
									wp_die(wp_remote_retrieve_body($response));
								}
								
								$range_str = json_decode(wp_remote_retrieve_body($response))->updates->updatedRange;
	
								$start = strpos($range_str,'A');
								$end = strpos($range_str, ':');
								
								$range_arr = str_split($range_str);
								
								$range = '';
								for($i = $start; $i < $end; $i++){
									$range .= $range_arr[$i];
								}
								
								gform_update_meta( $entry['id'], 'api_response', $range );
								
								
		                    } catch (Exception $e) {
		                        $data['ERROR_MSG'] = $e->getMessage();
		                        $data['TRACE_STK'] = $e->getTraceAsString();
		                        GFGS_Connector_log::gfgs_debug_log($data);
		                    }
							#entries loop ends here
						}
					}
				}
			}
			wp_die('__'.$next_page);
		}
        public function enqueue_scripts(){
            wp_enqueue_script('gfgsjs',GFGS_CONNECTOR_URL.'/assets/js/backend_script.js',array('jquery'));
            wp_localize_script('gfgsjs','gfgs',array(
                    'ajaxurl'    =>    admin_url('admin-ajax.php')
                ));
		}
		
		public function sync_entries_spreadsheet(){
			if(is_admin()){

				if(isset($_POST['form_id']) && !empty($_POST['form_id']) && isset($_POST['page_no']) && wp_verify_nonce( $_POST['sync_entries_nonce'], 'sync_entries' ) ){

					$page_no = absint($_POST['page_no']);
					$form_id = absint($_POST['form_id']);

						$total_entries = GFAPI::get_entries( $form_id, array(), array(), array( 'offset' => 0, 'page_size' => 1000 ));
						
						$search_criteria = array(); 
						$page_size = 20;
						// $current_page    = max( 1, $page_no );
						
						$offset   = $page_no * $page_size;						

						$sorting = []; 
						$paging = ['offset' => $offset, 'page_size' => $page_size]; 
						$total_count = 0;
						sleep(2);
						$entries = GFAPI::get_entries( $form_id , $search_criteria, $sorting, $paging, $total_count );							
						
						if( count($total_entries) <= $offset ) {
							wp_die('done');
						}						
						
						$next_page = $page_no+1;
						
						if(!empty($entries)){
							
							do_action('gfgs_synchronize_form_entries',$form_id,$entries,$next_page);
						}

				}
			}


			die('failed');
		}
    }
    new GF_Google_Sheet_Connector_Settings();
}
