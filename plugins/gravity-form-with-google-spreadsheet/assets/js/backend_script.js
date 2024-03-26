jQuery(document).ready(function(){
     /**
    * verify the api code
    * @since 1.0
    */
    jQuery(document).on('click', '#save-gfgs-code', function (e) {
    	e.preventDefault();
        jQuery( ".loading-sign" ).addClass( "loading" );
        var data = {
        action: 'verify_gfgs_integation',
        code: jQuery('#gfgs-code').val(),
        clientid: jQuery('#gfgs-client-id').val(),
        clientsecret: jQuery('#gfgs-client-secret').val(),
        security: jQuery('#gfgs-ajax-nonce').val()
      };
      jQuery.post(gfgs.ajaxurl, data, function (response ) {
      	console.log(response);
          if( response=='error') { 
            jQuery( ".loading-sign" ).removeClass( "loading" );
            jQuery( "#gfgs-validation-message" ).empty();
            jQuery('#gfgs-validation-message').append("<span class='error-message'>Client Secret and Client ID Can't be blank</span>");
          } else {
            jQuery( ".loading-sign" ).removeClass( "loading" );
            jQuery( "#gfgs-validation-message" ).empty();
            jQuery('#gfgs-validation-message').append("<span class='gs-valid-message'>Settings Updated.</span>"); 
            jQuery('#gfgs-code').removeAttr("disabled");
            jQuery("#get_code_link").removeAttr("style");
            var clientid= jQuery('#gfgs-client-id').val();
            var redirecturi= jQuery('.redireuri').text();
            var get_code_url="https://accounts.google.com/o/oauth2/auth?access_type=offline&approval_prompt=force&client_id="+clientid+"&redirect_uri="+redirecturi+"&response_type=code&scope=https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.file";
         
			jQuery("#get_code_link").attr("href", get_code_url);
          }
      });
      
    });  
    jQuery('#gfgs-sheet-headers-inherit').on('click',function(){
        if(jQuery(this).is(':checked')){
            jQuery('#tab_gfgs_connector_page table tr.custom-fields').css('display','none');
        }else{
            jQuery('#tab_gfgs_connector_page table tr.custom-fields').css('display','table-row');
        }
    });
    jQuery('#gfgs-sheet-headers-custom').on('click',function(){
        if(jQuery(this).is(':checked')){
            jQuery('#tab_gfgs_connector_page table tr.custom-fields').css('display','table-row');
        }else{
            jQuery('#tab_gfgs_connector_page table tr.custom-fields').css('display','none');
        }
    });
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
    });
    jQuery(document).find('.gfgs #gfgs_conditional_logics span.addmore').on('click',function(e){
      var con = jQuery('.gfgs #gfgs_conditional_logics .conditions_body').find("p:last").clone();
      jQuery('.gfgs #gfgs_conditional_logics .conditions_body').prepend(con);
      jQuery(".gfgs #gfgs_conditional_logics .conditions_body").find('p:first').find('span.addmore').removeClass('addmore').addClass('remove').text('-');
    });
});