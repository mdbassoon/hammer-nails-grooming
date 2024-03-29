<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */


  /**
   * The "adclients" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new GFGS_Google_AdExchangeSellerService(...);
   *   $adclients = $adexchangesellerService->adclients;
   *  </code>
   */
  class GFGS_Google_AdclientsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * List all ad clients in this Ad Exchange account. (adclients.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of ad clients to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad clients. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return GFGS_Google_AdClients
     */
    public function listAdclients($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_AdClients($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "adunits" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new GFGS_Google_AdExchangeSellerService(...);
   *   $adunits = $adexchangesellerService->adunits;
   *  </code>
   */
  class GFGS_Google_AdunitsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Gets the specified ad unit in the specified ad client. (adunits.get)
     *
     * @param string $adClientId Ad client for which to get the ad unit.
     * @param string $adUnitId Ad unit to retrieve.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_AdUnit
     */
    public function get($adClientId, $adUnitId, $optParams = array()) {
      $params = array('adClientId' => $adClientId, 'adUnitId' => $adUnitId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_AdUnit($data);
      } else {
        return $data;
      }
    }
    /**
     * List all ad units in the specified ad client for this Ad Exchange account. (adunits.list)
     *
     * @param string $adClientId Ad client for which to list ad units.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeInactive Whether to include inactive ad units. Default: true.
     * @opt_param string maxResults The maximum number of ad units to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad units. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return GFGS_Google_AdUnits
     */
    public function listAdunits($adClientId, $optParams = array()) {
      $params = array('adClientId' => $adClientId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_AdUnits($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "customchannels" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new GFGS_Google_AdExchangeSellerService(...);
   *   $customchannels = $adexchangesellerService->customchannels;
   *  </code>
   */
  class GFGS_Google_AdunitsCustomchannelsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * List all custom channels which the specified ad unit belongs to. (customchannels.list)
     *
     * @param string $adClientId Ad client which contains the ad unit.
     * @param string $adUnitId Ad unit for which to list custom channels.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of custom channels to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through custom channels. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return GFGS_Google_CustomChannels
     */
    public function listAdunitsCustomchannels($adClientId, $adUnitId, $optParams = array()) {
      $params = array('adClientId' => $adClientId, 'adUnitId' => $adUnitId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_CustomChannels($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "customchannels" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new GFGS_Google_AdExchangeSellerService(...);
   *   $customchannels = $adexchangesellerService->customchannels;
   *  </code>
   */
  class GFGS_Google_CustomchannelsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Get the specified custom channel from the specified ad client. (customchannels.get)
     *
     * @param string $adClientId Ad client which contains the custom channel.
     * @param string $customChannelId Custom channel to retrieve.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_CustomChannel
     */
    public function get($adClientId, $customChannelId, $optParams = array()) {
      $params = array('adClientId' => $adClientId, 'customChannelId' => $customChannelId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_CustomChannel($data);
      } else {
        return $data;
      }
    }
    /**
     * List all custom channels in the specified ad client for this Ad Exchange account.
     * (customchannels.list)
     *
     * @param string $adClientId Ad client for which to list custom channels.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of custom channels to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through custom channels. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return GFGS_Google_CustomChannels
     */
    public function listCustomchannels($adClientId, $optParams = array()) {
      $params = array('adClientId' => $adClientId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_CustomChannels($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "adunits" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new GFGS_Google_AdExchangeSellerService(...);
   *   $adunits = $adexchangesellerService->adunits;
   *  </code>
   */
  class GFGS_Google_CustomchannelsAdunitsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * List all ad units in the specified custom channel. (adunits.list)
     *
     * @param string $adClientId Ad client which contains the custom channel.
     * @param string $customChannelId Custom channel for which to list ad units.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeInactive Whether to include inactive ad units. Default: true.
     * @opt_param string maxResults The maximum number of ad units to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad units. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return GFGS_Google_AdUnits
     */
    public function listCustomchannelsAdunits($adClientId, $customChannelId, $optParams = array()) {
      $params = array('adClientId' => $adClientId, 'customChannelId' => $customChannelId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_AdUnits($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "reports" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new GFGS_Google_AdExchangeSellerService(...);
   *   $reports = $adexchangesellerService->reports;
   *  </code>
   */
  class GFGS_Google_ReportsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Generate an Ad Exchange report based on the report request sent in the query parameters. Returns
     * the result as JSON; to retrieve output in CSV format specify "alt=csv" as a query parameter.
     * (reports.generate)
     *
     * @param string $startDate Start of the date range to report on in "YYYY-MM-DD" format, inclusive.
     * @param string $endDate End of the date range to report on in "YYYY-MM-DD" format, inclusive.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string dimension Dimensions to base the report on.
     * @opt_param string filter Filters to be run on the report.
     * @opt_param string locale Optional locale to use for translating report output to a local language. Defaults to "en_US" if not specified.
     * @opt_param string maxResults The maximum number of rows of report data to return.
     * @opt_param string metric Numeric columns to include in the report.
     * @opt_param string sort The name of a dimension or metric to sort the resulting report on, optionally prefixed with "+" to sort ascending or "-" to sort descending. If no prefix is specified, the column is sorted ascending.
     * @opt_param string startIndex Index of the first row of report data to return.
     * @return GFGS_Google_Report
     */
    public function generate($startDate, $endDate, $optParams = array()) {
      $params = array('startDate' => $startDate, 'endDate' => $endDate);
      $params = array_merge($params, $optParams);
      $data = $this->__call('generate', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Report($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "saved" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new GFGS_Google_AdExchangeSellerService(...);
   *   $saved = $adexchangesellerService->saved;
   *  </code>
   */
  class GFGS_Google_ReportsSavedServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Generate an Ad Exchange report based on the saved report ID sent in the query parameters.
     * (saved.generate)
     *
     * @param string $savedReportId The saved report to retrieve.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string locale Optional locale to use for translating report output to a local language. Defaults to "en_US" if not specified.
     * @opt_param int maxResults The maximum number of rows of report data to return.
     * @opt_param int startIndex Index of the first row of report data to return.
     * @return GFGS_Google_Report
     */
    public function generate($savedReportId, $optParams = array()) {
      $params = array('savedReportId' => $savedReportId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('generate', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Report($data);
      } else {
        return $data;
      }
    }
    /**
     * List all saved reports in this Ad Exchange account. (saved.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of saved reports to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through saved reports. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return GFGS_Google_SavedReports
     */
    public function listReportsSaved($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_SavedReports($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "urlchannels" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new GFGS_Google_AdExchangeSellerService(...);
   *   $urlchannels = $adexchangesellerService->urlchannels;
   *  </code>
   */
  class GFGS_Google_UrlchannelsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * List all URL channels in the specified ad client for this Ad Exchange account. (urlchannels.list)
     *
     * @param string $adClientId Ad client for which to list URL channels.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of URL channels to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through URL channels. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return GFGS_Google_UrlChannels
     */
    public function listUrlchannels($adClientId, $optParams = array()) {
      $params = array('adClientId' => $adClientId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_UrlChannels($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for Google_AdExchangeSeller (v1).
 *
 * <p>
 * Gives Ad Exchange seller users access to their inventory and the ability to generate reports
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/adsense/management/" target="_blank">API Documentation</a>
 * </p>
 *
 */
class GFGS_Google_AdExchangeSellerService extends GFGS_Google_Service {
  public $adclients;
  public $adunits;
  public $adunits_customchannels;
  public $customchannels;
  public $customchannels_adunits;
  public $reports;
  public $reports_saved;
  public $urlchannels;
  /**
   * Constructs the internal representation of the AdExchangeSeller service.
   *
   * @param GFGSC_Google_Client_Connector $client
   */
  public function __construct(GFGSC_Google_Client_Connector $client) {
    $this->servicePath = 'adexchangeseller/v1/';
    $this->version = 'v1';
    $this->serviceName = 'adexchangeseller';

    $client->addService($this->serviceName, $this->version);
    $this->adclients = new GFGS_Google_AdclientsServiceResource($this, $this->serviceName, 'adclients', json_decode('{"methods": {"list": {"id": "adexchangeseller.adclients.list", "path": "adclients", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdClients"}}}}', true));
    $this->adunits = new GFGS_Google_AdunitsServiceResource($this, $this->serviceName, 'adunits', json_decode('{"methods": {"get": {"id": "adexchangeseller.adunits.get", "path": "adclients/{adClientId}/adunits/{adUnitId}", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AdUnit"}}, "list": {"id": "adexchangeseller.adunits.list", "path": "adclients/{adClientId}/adunits", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "includeInactive": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdUnits"}}}}', true));
    $this->adunits_customchannels = new GFGS_Google_AdunitsCustomchannelsServiceResource($this, $this->serviceName, 'customchannels', json_decode('{"methods": {"list": {"id": "adexchangeseller.adunits.customchannels.list", "path": "adclients/{adClientId}/adunits/{adUnitId}/customchannels", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CustomChannels"}}}}', true));
    $this->customchannels = new GFGS_Google_CustomchannelsServiceResource($this, $this->serviceName, 'customchannels', json_decode('{"methods": {"get": {"id": "adexchangeseller.customchannels.get", "path": "adclients/{adClientId}/customchannels/{customChannelId}", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "customChannelId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CustomChannel"}}, "list": {"id": "adexchangeseller.customchannels.list", "path": "adclients/{adClientId}/customchannels", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CustomChannels"}}}}', true));
    $this->customchannels_adunits = new GFGS_Google_CustomchannelsAdunitsServiceResource($this, $this->serviceName, 'adunits', json_decode('{"methods": {"list": {"id": "adexchangeseller.customchannels.adunits.list", "path": "adclients/{adClientId}/customchannels/{customChannelId}/adunits", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "customChannelId": {"type": "string", "required": true, "location": "path"}, "includeInactive": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdUnits"}}}}', true));
    $this->reports = new GFGS_Google_ReportsServiceResource($this, $this->serviceName, 'reports', json_decode('{"methods": {"generate": {"id": "adexchangeseller.reports.generate", "path": "reports", "httpMethod": "GET", "parameters": {"dimension": {"type": "string", "repeated": true, "location": "query"}, "endDate": {"type": "string", "required": true, "location": "query"}, "filter": {"type": "string", "repeated": true, "location": "query"}, "locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "50000", "location": "query"}, "metric": {"type": "string", "repeated": true, "location": "query"}, "sort": {"type": "string", "repeated": true, "location": "query"}, "startDate": {"type": "string", "required": true, "location": "query"}, "startIndex": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "5000", "location": "query"}}, "response": {"$ref": "Report"}, "supportsMediaDownload": true}}}', true));
    $this->reports_saved = new GFGS_Google_ReportsSavedServiceResource($this, $this->serviceName, 'saved', json_decode('{"methods": {"generate": {"id": "adexchangeseller.reports.saved.generate", "path": "reports/{savedReportId}", "httpMethod": "GET", "parameters": {"locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "50000", "location": "query"}, "savedReportId": {"type": "string", "required": true, "location": "path"}, "startIndex": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "5000", "location": "query"}}, "response": {"$ref": "Report"}}, "list": {"id": "adexchangeseller.reports.saved.list", "path": "reports/saved", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "SavedReports"}}}}', true));
    $this->urlchannels = new GFGS_Google_UrlchannelsServiceResource($this, $this->serviceName, 'urlchannels', json_decode('{"methods": {"list": {"id": "adexchangeseller.urlchannels.list", "path": "adclients/{adClientId}/urlchannels", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "UrlChannels"}}}}', true));

  }
}

class GFGS_Google_AdClient extends GFGS_Google_Model {
  public $arcOptIn;
  public $id;
  public $kind;
  public $productCode;
  public $supportsReporting;
  public function setArcOptIn($arcOptIn) {
    $this->arcOptIn = $arcOptIn;
  }
  public function getArcOptIn() {
    return $this->arcOptIn;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setProductCode($productCode) {
    $this->productCode = $productCode;
  }
  public function getProductCode() {
    return $this->productCode;
  }
  public function setSupportsReporting($supportsReporting) {
    $this->supportsReporting = $supportsReporting;
  }
  public function getSupportsReporting() {
    return $this->supportsReporting;
  }
}

class GFGS_Google_AdClients extends GFGS_Google_Model {
  public $etag;
  protected $__itemsType = 'GFGS_Google_AdClient';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(GFGS_Google_AdClient) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_AdClient', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
}

class GFGS_Google_AdUnit extends GFGS_Google_Model {
  public $code;
  public $id;
  public $kind;
  public $name;
  public $status;
  public function setCode($code) {
    $this->code = $code;
  }
  public function getCode() {
    return $this->code;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
}

class GFGS_Google_AdUnits extends GFGS_Google_Model {
  public $etag;
  protected $__itemsType = 'GFGS_Google_AdUnit';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(GFGS_Google_AdUnit) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_AdUnit', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
}

class GFGS_Google_CustomChannel extends GFGS_Google_Model {
  public $code;
  public $id;
  public $kind;
  public $name;
  protected $__targetingInfoType = 'GFGS_Google_CustomChannelTargetingInfo';
  protected $__targetingInfoDataType = '';
  public $targetingInfo;
  public function setCode($code) {
    $this->code = $code;
  }
  public function getCode() {
    return $this->code;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setTargetingInfo(GFGS_Google_CustomChannelTargetingInfo $targetingInfo) {
    $this->targetingInfo = $targetingInfo;
  }
  public function getTargetingInfo() {
    return $this->targetingInfo;
  }
}

class GFGS_Google_CustomChannelTargetingInfo extends GFGS_Google_Model {
  public $adsAppearOn;
  public $description;
  public $location;
  public $siteLanguage;
  public function setAdsAppearOn($adsAppearOn) {
    $this->adsAppearOn = $adsAppearOn;
  }
  public function getAdsAppearOn() {
    return $this->adsAppearOn;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setLocation($location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
  public function setSiteLanguage($siteLanguage) {
    $this->siteLanguage = $siteLanguage;
  }
  public function getSiteLanguage() {
    return $this->siteLanguage;
  }
}

class GFGS_Google_CustomChannels extends GFGS_Google_Model {
  public $etag;
  protected $__itemsType = 'GFGS_Google_CustomChannel';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(GFGS_Google_CustomChannel) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_CustomChannel', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
}

class GFGS_Google_Report extends GFGS_Google_Model {
  public $averages;
  protected $__headersType = 'GFGS_Google_ReportHeaders';
  protected $__headersDataType = 'array';
  public $headers;
  public $kind;
  public $rows;
  public $totalMatchedRows;
  public $totals;
  public $warnings;
  public function setAverages( $averages) {
    $this->averages = $averages;
  }
  public function getAverages() {
    return $this->averages;
  }
  public function setHeaders(/* array(GFGS_Google_ReportHeaders) */ $headers) {
    $this->assertIsArray($headers, 'GFGS_Google_ReportHeaders', __METHOD__);
    $this->headers = $headers;
  }
  public function getHeaders() {
    return $this->headers;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setRows( $rows) {
    $this->rows = $rows;
  }
  public function getRows() {
    return $this->rows;
  }
  public function setTotalMatchedRows($totalMatchedRows) {
    $this->totalMatchedRows = $totalMatchedRows;
  }
  public function getTotalMatchedRows() {
    return $this->totalMatchedRows;
  }
  public function setTotals( $totals) {
    $this->totals = $totals;
  }
  public function getTotals() {
    return $this->totals;
  }
  public function setWarnings( $warnings) {
    $this->warnings = $warnings;
  }
  public function getWarnings() {
    return $this->warnings;
  }
}

class GFGS_Google_ReportHeaders extends GFGS_Google_Model {
  public $currency;
  public $name;
  public $type;
  public function setCurrency($currency) {
    $this->currency = $currency;
  }
  public function getCurrency() {
    return $this->currency;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class GFGS_Google_SavedReport extends GFGS_Google_Model {
  public $id;
  public $kind;
  public $name;
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class GFGS_Google_SavedReports extends GFGS_Google_Model {
  public $etag;
  protected $__itemsType = 'GFGS_Google_SavedReport';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(GFGS_Google_SavedReport) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_SavedReport', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
}

class GFGS_Google_UrlChannel extends GFGS_Google_Model {
  public $id;
  public $kind;
  public $urlPattern;
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setUrlPattern($urlPattern) {
    $this->urlPattern = $urlPattern;
  }
  public function getUrlPattern() {
    return $this->urlPattern;
  }
}

class GFGS_Google_UrlChannels extends GFGS_Google_Model {
  public $etag;
  protected $__itemsType = 'GFGS_Google_UrlChannel';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(GFGS_Google_UrlChannel) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_UrlChannel', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
}
