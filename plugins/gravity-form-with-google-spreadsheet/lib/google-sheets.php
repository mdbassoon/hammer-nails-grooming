<?php
require_once plugin_dir_path(__FILE__).'php-google-oauth/Google_Client.php';
include_once ( plugin_dir_path(__FILE__) . 'autoload.php' );
use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;

class GFGSC_googlesheet {
	private $token;
	private $spreadsheet;
	private $worksheet;
	
	public function __construct() {
	}

	//constructed on call
	public static function preauth($access_code){

		$redirect= 'urn:ietf:wg:oauth:2.0:oob';
		$clientId = get_option('gfgs_googlesheet_client_id',false);
		$clientSecret = get_option('gfgs_googlesheet_client_secret',false);

		$client = new GFGSC_Google_Client_Connector();
		$client->setClientId($clientId);
		$client->setClientSecret($clientSecret);
		$client->setRedirectUri($redirect);
		$client->setScopes(array('https://spreadsheets.google.com/feeds'));

		$results = $client->authenticate($access_code);
		$tokenData = json_decode($client->getAccessToken(), true);
		$message=GFGSC_googlesheet::updateToken($tokenData);
		return 'success';
	}
	
	public static function updateToken($tokenData){
		$tokenData['expire'] = time() + intval($tokenData['expires_in']);
		try{
			$tokenJson = json_encode($tokenData);
			update_option('gfgs_token', $tokenJson);
		} catch (Exception $e) {
			GFGS_Connector_log::gfgs_debug_log("Token write fail! - ".$e->getMessage());
		}
	}
	
	public function auth(){
		$tokenData = json_decode(get_option('gfgs_token'), true);
		$clientId = get_option('gfgs_googlesheet_client_id',false);
		$clientSecret = get_option('gfgs_googlesheet_client_secret',false);
		
		if(time() > $tokenData['expire']){
			$client = new GFGSC_Google_Client_Connector();
			$client->setClientId($clientId);
			$client->setClientSecret($clientSecret);
			$client->refreshToken($tokenData['refresh_token']);
			$tokenData = array_merge($tokenData, json_decode($client->getAccessToken(), true));
			GFGSC_googlesheet::updateToken($tokenData);
		}
		
		/* this is needed */
		$serviceRequest = new DefaultServiceRequest($tokenData['access_token']);
		ServiceRequestFactory::setInstance($serviceRequest);
	}

	//preg_match is a key of error handle in this case
	public function settitleSpreadsheet($title) {
		$this->spreadsheet = $title;
	}

	//finished setting the title
	public function settitleWorksheet($title) {
		$this->worksheet = $title;
	}

	//choosing the worksheet

	public function get_row() {
    	$spreadsheetService = new Google\Spreadsheet\SpreadsheetService();
		$spreadsheetFeed = $spreadsheetService->getSpreadsheets();
		$spreadsheet = $spreadsheetFeed->getByTitle($this->spreadsheet);
		$worksheetFeed = $spreadsheet->getWorksheets();
		$worksheet = $worksheetFeed->getByTitle($this->worksheet);
        $listFeed = $worksheet->getListFeed();
		return $listFeed;		
	}
	public function getSpreadheets(){
	    $spreadsheetService = new Google\Spreadsheet\SpreadsheetService();
		$spreadsheetFeed = $spreadsheetService->getSpreadsheets();
		return $spreadsheetFeed;
	}
	
}
?>