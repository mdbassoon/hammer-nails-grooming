<?php
if ( ! defined('ABSPATH') ) {
   exit; // Exit if accessed directly
}
if (!class_exists('Gfgs_Google_Sheet_Connector')) {
    class Gfgs_Google_Sheet_Connector
    {
        public function __construct(){
            add_action('wp_ajax_verify_gfgs_integation', array($this,'verify_gfgs_integation'));
            add_action( 'gform_after_submission', array($this, 'post_data_to_sheet'), 10, 2 );
            add_action( 'admin_init', array($this, 'template_redirect_gfsheet'), 10, 2 );
        }
        public function check_logic($label,$value,$conditions){
            $status=true;

            if(!empty($label) && !empty($value) && !empty($conditions)){
                if(isset($conditions['label']) && count($conditions['label'])>0){
                    for ($i=0; $i < count($conditions['label']); $i++) { 
                        if($conditions['label'][$i]==$label){
                            if($conditions['logic'][$i]=='is' && $value!=$conditions['value'][$i]) {
                              $status=false;
                              break;
                            }elseif($conditions['logic'][$i]=='is_not' && $value==$conditions['value'][$i]) {
                              $status= false;
                              break;
                            }elseif($conditions['logic'][$i]=='contains' && strpos($value,$conditions['value'][$i]) === false){
                                $status= false;
                                break;
                            }elseif ($conditions['logic'][$i]=='less_than' && $value>$conditions['value'][$i]) {
                                $status= false;
                                break;
                            }elseif ($conditions['logic'][$i]=='greater_than' && $value<$conditions['value'][$i]) {
                                $status=false;
                               break;
                            }
                        }
                    }
                }else{
                    return $status;
                }
            }
            return $status;
        }
        public function post_data_to_sheet($entry, $form){	
			
            $form_id=$form["id"];
            $options=get_option('gfgs_google_sheet_connector_fields_'.$form_id);
            if( isset ( $options['gfgs']['enable'] ) &&  $options['gfgs']['enable']=='yes'){
                $sheetname=isset ( $options['gfgs']['sheet-name'] ) ? esc_attr( $options['gfgs']['sheet-name'] ) : '';
                $sheettab=isset ( $options['gfgs']['sheet-tab-name'] ) ? esc_attr( $options['gfgs']['sheet-tab-name'] ) : '';
                $flag=0;
                if(isset($options['gfgs']['conditional-logic']) && $options['gfgs']['conditional-logic']=='yes' && !empty($options['gfgs']['conditions'])){
                    $cond=$options['gfgs']['conditions'];
                    if(isset($cond['value']) && count($cond['value'])>0){
                        foreach ( $form['fields'] as $field ) {
                            $inputs = $field->get_entry_inputs();
                            if ( is_array( $inputs ) ) {
                                foreach ( $inputs as $input ) {
                                    if(in_array($input['label'], $cond['label'])){
                                        $value = rgar( $entry, (string) $input['id'] );
                                        if(!$this->check_logic($input['label'],$value,$cond))
                                            $flag=1;
                                    }
                                }
                            } else {
                                if(in_array($field['label'], $cond['label'])){
                                    $value = rgar( $entry, (string) $field->id );
                                    if(!$this->check_logic($field['label'],$value,$cond))
                                        $flag=1;
                                }
                            }

                        }
                    }
                }				

                if(!empty($sheetname) && !empty($sheettab) && $flag==0){
                    //&& isset($options['fields']) && !empty($options['fields'])
                    $data["entryid"] = $entry['id'];
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
                                $inputs[0]['label'] = $field->label;    
                                 //$label=strtolower(preg_replace('/[^A-Z0-9_-]/i', '', $inputs[0]['label']));
                                $label = strtolower(str_replace(' ', '', $input[0]['label']));
								$data[$label] = rgar( $entry, (string)  $inputs[0]['id'] );
                               /* foreach ( $inputs as $input ) {
                                                             
                                    // do something with the value
                                } */
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
								if(!empty($options['fields'][$index])){
									$header_columns[] = $options['fields'][$index];
								}
							}
						}
						else {
							
							foreach($columns as $index => $value){
								$col = strtolower($value['label']);
								if($col == ''){
									continue;
								}
								else {
									$header_columns[] = str_replace(' ', '', $col);
								}
							}
						}

						if($options['gfgs']['sync-metadata-fields'] && $options['gfgs']['sync-metadata-fields'] == 'yes'){
							foreach($options['gfgsmetafield'] as $key => $val){
								if($val == 'yes'){
									$header_columns[] = $options['mfields'][$key];
								}
							}
						}
						
								$index = 0;
								foreach($form['fields'] as $key => $val)
								{
									if($form['fields'][$key]->label == 'Name'){
										$index = $form['fields'][$key]->id;
									}
								}
								
								$date_index = 0;
								foreach($form['fields'] as $key => $val)
								{
									if($form['fields'][$key]->label == 'Date'){
										$date_index = $form['fields'][$key]->id;
									}
								}						
								
								$data['first'] = $entry[$index.'.3'];
								$data['last'] = $entry[$index.'.6'];

								$address_index = 0;
								foreach($form['fields'] as $key => $val){
									if($form['fields'][$key]->label == 'Address'){
										$address_index = $form['fields'][$key]->id;
									}
								}
								
								$data['streetaddress'] = $entry[$address_index.'.1'];

							foreach($data as $key => $val){
								if($key == 'Date'){
									$data[$key] = $entry[$date_index];
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
								
							$flag = false;
							$new_arr = array();
							foreach($header_columns as $index => $val){
								if($val == 'date'){
									if($flag == false){
										$flag = true;
										$new_arr[ucwords($val)] = $updated_data[ucwords($val)];
									}
									else{
										continue;
									}
								}
								else {
									$new_arr[$val] = $updated_data[$val];
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
								$response = $this->spreadsheet_operations($url, 'POST', $final_data);							
								
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
                }
            }
        }
		public function spreadsheet_operations($url, $method, $data){

			$doc = new GFGSC_googlesheet();
            $doc->auth();

			$access_token_data = json_decode(get_option('gfgs_token'), true);
					
			$headers = array(
				'Authorization' => 'Bearer '. $access_token_data['access_token'],
				'Accept'        => 'application/json',
				'Content-Type' 	=> 'application/json',
			);

			$response = wp_remote_request($url, array(
				'method'  => $method,
				'headers' => $headers,
				'httpversion' => '1.0',
				'sslverify' => false,
				'body'  => json_encode($data)
			));
			
			if(is_wp_error($response)){
				echo 'There is some errors in your request';
			}
			
			return $response;
		}
        public function template_redirect_gfsheet(){
			
			if(isset($_GET['page']) and isset($_GET['code']) ){
			if(!empty($_GET['code']) ){
				  /* sanitize incoming data */
				$code = sanitize_text_field( $_GET['code'] );
				$clientid = sanitize_text_field( get_option('gfgs_googlesheet_client_id',false) );
				$clientsecret = sanitize_text_field( get_option('gfgs_googlesheet_client_secret',false) );
				
				update_option( 'gfgs_googlesheet_access_code', $code );
				  
				if ( get_option( 'gfgs_googlesheet_access_code') != '' ) {
	 
					require_once GFGS_CONNECTOR_PATH . 'lib/google-sheets.php';
					$message=GFGSC_googlesheet::preauth( get_option('gfgs_googlesheet_access_code' ) );
					update_option( 'gfgs_verify_connector', 'valid' );
							
					if($message=='success')
					echo 'success';
					else
					echo 'error';
					//wp_send_json_success();
				} else if ( get_option( 'gfgs_googlesheet_client_id') != '' && get_option( 'gfgs_googlesheet_client_secret') != '') {
					echo 'success';
				}{
					 update_option( 'gfgs_verify_connector', 'invalid' );
					 echo 'error';
				} 
			
				wp_redirect(admin_url('admin.php?page=gf_settings&subview=gfgs_connector_settings&responsegfs='.$message));
				die();
			}
			}
		}
        public function verify_gfgs_integation(){
        	// nonce check
		    check_ajax_referer( 'gfgs-ajax-nonce', 'security' );

		      /* sanitize incoming data */
            $code = sanitize_text_field( $_POST[ "code" ] );
            $clientid = sanitize_text_field( $_POST[ "clientid" ] );
            $clientsecret = sanitize_text_field( $_POST[ "clientsecret" ] );
             
            update_option( 'gfgs_googlesheet_access_code', $code );
            update_option( 'gfgs_googlesheet_client_id', $clientid );
            update_option( 'gfgs_googlesheet_client_secret', $clientsecret );
		      
		    if ( get_option( 'gfgs_googlesheet_access_code') != '' ) {
 
				require_once GFGS_CONNECTOR_PATH . 'lib/google-sheets.php';
				$message=GFGSC_googlesheet::preauth( get_option('gfgs_googlesheet_access_code' ) );
		        update_option( 'gfgs_verify_connector', 'valid' );
		        if($message=='success')
		        echo 'success';
		     	else
		     	echo 'error';
		        //wp_send_json_success();
		    } else if ( get_option( 'gfgs_googlesheet_client_id') != '' && get_option( 'gfgs_googlesheet_client_secret') != '') {
                echo 'success';
            }{
		         update_option( 'gfgs_verify_connector', 'invalid' );
		         echo 'error';
		    } 
			
		    die();
        }
    }
    new Gfgs_Google_Sheet_Connector();
}