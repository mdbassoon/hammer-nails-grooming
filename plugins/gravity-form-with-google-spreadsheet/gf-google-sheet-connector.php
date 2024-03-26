<?php
/*
  Plugin Name: GF Google Sheet Connector
  Plugin URI: https://www.wpexperts.io
  Description: Send your Gravityforms data to your Google Sheets spreadsheet.
  Version: 1.3.1
  Author: WPExperts
  Author URI: https://www.wpexperts.io
  Text Domain: gfgsconnector
  License: GPLv3
  License URI: https://www.gnu.org/licenses/gpl.html 
 */

if ( ! defined('ABSPATH') ) {
   exit; // Exit if accessed directly
}

if ( ! function_exists( 'ggsc_fs' ) ) {
    // Create a helper function for easy SDK access.
    function ggsc_fs() {
        global $ggsc_fs;

        if ( ! isset( $ggsc_fs ) ) {
            // Include Freemius SDK.
            require_once dirname(__FILE__) . '/freemius/start.php';

            $ggsc_fs = fs_dynamic_init( array(
                'id'                  => '5615',
                'slug'                => 'gf-google-sheet-connector',
                'type'                => 'plugin',
                'public_key'          => 'pk_a872cceb84f751e71e0af3be5bfd9',
                'is_premium'          => false,
                'has_addons'          => false,
                'has_paid_plans'      => false,
                'is_org_compliant'    => false,
                'menu'                => array(
                    'override_exact' => true,
                    'first-path'     => 'plugins.php',
                    'account'        => false,
                    'contact'        => false,
                    'support'        => false,
                ),
            ) );
        }
        return $ggsc_fs;
    }

    // Init Freemius.
    ggsc_fs();
    // Signal that SDK was initiated.
    do_action( 'ggsc_fs_loaded' );
    }

define('GFGS_CONNECTOR_PATH', plugin_dir_path(__FILE__)); //use for include files to other files
define('GFGS_CONNECTOR_URL', plugin_dir_url( __FILE__)); //use for include files to other files

if (!class_exists('Gravity_Forms_Google_Sheet_Connector')) {
    class Gravity_Forms_Google_Sheet_Connector
    {
        public function __construct(){
            /**
             * check for gravity forms plugin
             */
			$this->gfgs_plugin_dependencies();
           // add_action('wp_loaded', array($this,'gfgs_plugin_dependencies'));
        }
        public function gfgs_plugin_dependencies() {
            if (! in_array( 'gravityforms/gravityforms.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) )) {
                add_action('admin_notices', array($this, 'admin_notices'));
            } 
            else 
            {
                /**
                 * include google sheet lib
                 */
                require_once( GFGS_CONNECTOR_PATH . 'lib/php-google-oauth/Google_Client.php' );
                /**
                 * include google sheet lib
                 */
                require_once( GFGS_CONNECTOR_PATH . 'lib/google-sheets.php' );
                /**
                 * include settings class
                 */
                require_once( GFGS_CONNECTOR_PATH . 'includes/gfgs-google-sheet-connector-settings.php' );
                /**
                 * include controller class
                 */
                require_once( GFGS_CONNECTOR_PATH . 'includes/gfgs-google-sheet-connector.php' );
                /**
                 * Google sheet connect
                 */
                require_once( GFGS_CONNECTOR_PATH . 'includes/gfgs-class-log.php' );
            }
        }
        
        public function admin_notices() {
            $class = 'notice notice-error';  

			if (!class_exists('GF_Field')) {
                 $messages[] = __('Gravity Forms Google Sheet Connector requires Gravity Forms to be installed and active.', 'gfgsconnector');
            }			
            
            if(!empty($messages) and is_array($messages)){
               foreach($messages as $message){
                    printf('<div class="%1$s"><p>%2$s</p></div>', $class, $message);
               }
           }
        }
    }
    $instance = new Gravity_Forms_Google_Sheet_Connector();
}