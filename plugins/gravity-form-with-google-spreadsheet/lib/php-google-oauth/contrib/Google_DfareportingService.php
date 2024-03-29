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
   * The "dimensionValues" collection of methods.
   * Typical usage is:
   *  <code>
   *   $dfareportingService = new GFGS_Google_DfareportingService(...);
   *   $dimensionValues = $dfareportingService->dimensionValues;
   *  </code>
   */
  class GFGS_Google_DimensionValuesServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Retrieves list of report dimension values for a list of filters. (dimensionValues.query)
     *
     * @param string $profileId The DFA user profile ID.
     * @param GFGS_Google_DimensionValueRequest $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults Maximum number of results to return.
     * @opt_param string pageToken The value of the nextToken from the previous result page.
     * @return GFGS_Google_DimensionValueList
     */
    public function query($profileId, GFGS_Google_DimensionValueRequest $postBody, $optParams = array()) {
      $params = array('profileId' => $profileId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('query', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_DimensionValueList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "files" collection of methods.
   * Typical usage is:
   *  <code>
   *   $dfareportingService = new GFGS_Google_DfareportingService(...);
   *   $files = $dfareportingService->files;
   *  </code>
   */
  class GFGS_Google_FilesServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Lists files for a user profile. (files.list)
     *
     * @param string $profileId The DFA profile ID.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults Maximum number of results to return.
     * @opt_param string pageToken The value of the nextToken from the previous result page.
     * @opt_param string sortField The field by which to sort the list.
     * @opt_param string sortOrder Order of sorted results, default is 'DESCENDING'.
     * @return GFGS_Google_FileList
     */
    public function listFiles($profileId, $optParams = array()) {
      $params = array('profileId' => $profileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_FileList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "reports" collection of methods.
   * Typical usage is:
   *  <code>
   *   $dfareportingService = new GFGS_Google_DfareportingService(...);
   *   $reports = $dfareportingService->reports;
   *  </code>
   */
  class GFGS_Google_ReportsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Deletes a report by its ID. (reports.delete)
     *
     * @param string $profileId The DFA user profile ID.
     * @param string $reportId The ID of the report.
     * @param array $optParams Optional parameters.
     */
    public function delete($profileId, $reportId, $optParams = array()) {
      $params = array('profileId' => $profileId, 'reportId' => $reportId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Retrieves a report by its ID. (reports.get)
     *
     * @param string $profileId The DFA user profile ID.
     * @param string $reportId The ID of the report.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Report
     */
    public function get($profileId, $reportId, $optParams = array()) {
      $params = array('profileId' => $profileId, 'reportId' => $reportId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Report($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a report. (reports.insert)
     *
     * @param string $profileId The DFA user profile ID.
     * @param GFGS_Google_Report $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Report
     */
    public function insert($profileId, GFGS_Google_Report $postBody, $optParams = array()) {
      $params = array('profileId' => $profileId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Report($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves list of reports. (reports.list)
     *
     * @param string $profileId The DFA user profile ID.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults Maximum number of results to return.
     * @opt_param string pageToken The value of the nextToken from the previous result page.
     * @opt_param string sortField The field by which to sort the list.
     * @opt_param string sortOrder Order of sorted results, default is 'DESCENDING'.
     * @return GFGS_Google_ReportList
     */
    public function listReports($profileId, $optParams = array()) {
      $params = array('profileId' => $profileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_ReportList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a report. This method supports patch semantics. (reports.patch)
     *
     * @param string $profileId The DFA user profile ID.
     * @param string $reportId The ID of the report.
     * @param GFGS_Google_Report $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Report
     */
    public function patch($profileId, $reportId, GFGS_Google_Report $postBody, $optParams = array()) {
      $params = array('profileId' => $profileId, 'reportId' => $reportId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Report($data);
      } else {
        return $data;
      }
    }
    /**
     * Runs a report. (reports.run)
     *
     * @param string $profileId The DFA profile ID.
     * @param string $reportId The ID of the report.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool synchronous If set and true, tries to run the report synchronously.
     * @return GFGS_Google_DfareportingFile
     */
    public function run($profileId, $reportId, $optParams = array()) {
      $params = array('profileId' => $profileId, 'reportId' => $reportId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('run', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_DfareportingFile($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a report. (reports.update)
     *
     * @param string $profileId The DFA user profile ID.
     * @param string $reportId The ID of the report.
     * @param GFGS_Google_Report $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Report
     */
    public function update($profileId, $reportId, GFGS_Google_Report $postBody, $optParams = array()) {
      $params = array('profileId' => $profileId, 'reportId' => $reportId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Report($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "files" collection of methods.
   * Typical usage is:
   *  <code>
   *   $dfareportingService = new GFGS_Google_DfareportingService(...);
   *   $files = $dfareportingService->files;
   *  </code>
   */
  class GFGS_Google_ReportsFilesServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Retrieves a report file. (files.get)
     *
     * @param string $profileId The DFA profile ID.
     * @param string $reportId The ID of the report.
     * @param string $fileId The ID of the report file.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_DfareportingFile
     */
    public function get($profileId, $reportId, $fileId, $optParams = array()) {
      $params = array('profileId' => $profileId, 'reportId' => $reportId, 'fileId' => $fileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_DfareportingFile($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists files for a report. (files.list)
     *
     * @param string $profileId The DFA profile ID.
     * @param string $reportId The ID of the parent report.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults Maximum number of results to return.
     * @opt_param string pageToken The value of the nextToken from the previous result page.
     * @opt_param string sortField The field by which to sort the list.
     * @opt_param string sortOrder Order of sorted results, default is 'DESCENDING'.
     * @return GFGS_Google_FileList
     */
    public function listReportsFiles($profileId, $reportId, $optParams = array()) {
      $params = array('profileId' => $profileId, 'reportId' => $reportId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_FileList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "userProfiles" collection of methods.
   * Typical usage is:
   *  <code>
   *   $dfareportingService = new GFGS_Google_DfareportingService(...);
   *   $userProfiles = $dfareportingService->userProfiles;
   *  </code>
   */
  class GFGS_Google_UserProfilesServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Gets one user profile by ID. (userProfiles.get)
     *
     * @param string $profileId The user profile ID.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_UserProfile
     */
    public function get($profileId, $optParams = array()) {
      $params = array('profileId' => $profileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_UserProfile($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves list of user profiles for a user. (userProfiles.list)
     *
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_UserProfileList
     */
    public function listUserProfiles($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_UserProfileList($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for Google_Dfareporting (v1.1).
 *
 * <p>
 * Lets you create, run and download reports.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/doubleclick-advertisers/reporting/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class GFGS_Google_DfareportingService extends GFGS_Google_Service {
  public $dimensionValues;
  public $files;
  public $reports;
  public $reports_files;
  public $userProfiles;
  /**
   * Constructs the internal representation of the Dfareporting service.
   *
   * @param GFGSC_Google_Client_Connector $client
   */
  public function __construct(GFGSC_Google_Client_Connector $client) {
    $this->servicePath = 'dfareporting/v1.1/';
    $this->version = 'v1.1';
    $this->serviceName = 'dfareporting';

    $client->addService($this->serviceName, $this->version);
    $this->dimensionValues = new GFGS_Google_DimensionValuesServiceResource($this, $this->serviceName, 'dimensionValues', json_decode('{"methods": {"query": {"id": "dfareporting.dimensionValues.query", "path": "userprofiles/{profileId}/dimensionvalues/query", "httpMethod": "POST", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "request": {"$ref": "DimensionValueRequest"}, "response": {"$ref": "DimensionValueList"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}}}', true));
    $this->files = new GFGS_Google_FilesServiceResource($this, $this->serviceName, 'files', json_decode('{"methods": {"list": {"id": "dfareporting.files.list", "path": "userprofiles/{profileId}/files", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "sortField": {"type": "string", "default": "LAST_MODIFIED_TIME", "enum": ["ID", "LAST_MODIFIED_TIME"], "location": "query"}, "sortOrder": {"type": "string", "default": "DESCENDING", "enum": ["ASCENDING", "DESCENDING"], "location": "query"}}, "response": {"$ref": "FileList"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}}}', true));
    $this->reports = new GFGS_Google_ReportsServiceResource($this, $this->serviceName, 'reports', json_decode('{"methods": {"delete": {"id": "dfareporting.reports.delete", "path": "userprofiles/{profileId}/reports/{reportId}", "httpMethod": "DELETE", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "get": {"id": "dfareporting.reports.get", "path": "userprofiles/{profileId}/reports/{reportId}", "httpMethod": "GET", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "response": {"$ref": "Report"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "insert": {"id": "dfareporting.reports.insert", "path": "userprofiles/{profileId}/reports", "httpMethod": "POST", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "request": {"$ref": "Report"}, "response": {"$ref": "Report"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "list": {"id": "dfareporting.reports.list", "path": "userprofiles/{profileId}/reports", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "sortField": {"type": "string", "default": "LAST_MODIFIED_TIME", "enum": ["ID", "LAST_MODIFIED_TIME", "NAME"], "location": "query"}, "sortOrder": {"type": "string", "default": "DESCENDING", "enum": ["ASCENDING", "DESCENDING"], "location": "query"}}, "response": {"$ref": "ReportList"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "patch": {"id": "dfareporting.reports.patch", "path": "userprofiles/{profileId}/reports/{reportId}", "httpMethod": "PATCH", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "request": {"$ref": "Report"}, "response": {"$ref": "Report"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "run": {"id": "dfareporting.reports.run", "path": "userprofiles/{profileId}/reports/{reportId}/run", "httpMethod": "POST", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "synchronous": {"type": "boolean", "location": "query"}}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "update": {"id": "dfareporting.reports.update", "path": "userprofiles/{profileId}/reports/{reportId}", "httpMethod": "PUT", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "request": {"$ref": "Report"}, "response": {"$ref": "Report"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}}}', true));
    $this->reports_files = new GFGS_Google_ReportsFilesServiceResource($this, $this->serviceName, 'files', json_decode('{"methods": {"get": {"id": "dfareporting.reports.files.get", "path": "userprofiles/{profileId}/reports/{reportId}/files/{fileId}", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "list": {"id": "dfareporting.reports.files.list", "path": "userprofiles/{profileId}/reports/{reportId}/files", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "reportId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "sortField": {"type": "string", "default": "LAST_MODIFIED_TIME", "enum": ["ID", "LAST_MODIFIED_TIME"], "location": "query"}, "sortOrder": {"type": "string", "default": "DESCENDING", "enum": ["ASCENDING", "DESCENDING"], "location": "query"}}, "response": {"$ref": "FileList"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}}}', true));
    $this->userProfiles = new GFGS_Google_UserProfilesServiceResource($this, $this->serviceName, 'userProfiles', json_decode('{"methods": {"get": {"id": "dfareporting.userProfiles.get", "path": "userprofiles/{profileId}", "httpMethod": "GET", "parameters": {"profileId": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "response": {"$ref": "UserProfile"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}, "list": {"id": "dfareporting.userProfiles.list", "path": "userprofiles", "httpMethod": "GET", "response": {"$ref": "UserProfileList"}, "scopes": ["https://www.googleapis.com/auth/dfareporting"]}}}', true));

  }
}

class GFGS_Google_Activities extends GFGS_Google_Model {
  protected $__filtersType = 'GFGS_Google_DimensionValue';
  protected $__filtersDataType = 'array';
  public $filters;
  public $kind;
  public $metricNames;
  public function setFilters(/* array(GFGS_Google_DimensionValue) */ $filters) {
    $this->assertIsArray($filters, 'GFGS_Google_DimensionValue', __METHOD__);
    $this->filters = $filters;
  }
  public function getFilters() {
    return $this->filters;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setMetricNames($metricNames) {
    $this->metricNames = $metricNames;
  }
  public function getMetricNames() {
    return $this->metricNames;
  }
}

class GFGS_Google_CustomRichMediaEvents extends GFGS_Google_Model {
  protected $__filteredEventIdsType = 'GFGS_Google_DimensionValue';
  protected $__filteredEventIdsDataType = 'array';
  public $filteredEventIds;
  public $kind;
  public function setFilteredEventIds(/* array(GFGS_Google_DimensionValue) */ $filteredEventIds) {
    $this->assertIsArray($filteredEventIds, 'GFGS_Google_DimensionValue', __METHOD__);
    $this->filteredEventIds = $filteredEventIds;
  }
  public function getFilteredEventIds() {
    return $this->filteredEventIds;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class GFGS_Google_DateRange extends GFGS_Google_Model {
  public $endDate;
  public $kind;
  public $relativeDateRange;
  public $startDate;
  public function setEndDate($endDate) {
    $this->endDate = $endDate;
  }
  public function getEndDate() {
    return $this->endDate;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setRelativeDateRange($relativeDateRange) {
    $this->relativeDateRange = $relativeDateRange;
  }
  public function getRelativeDateRange() {
    return $this->relativeDateRange;
  }
  public function setStartDate($startDate) {
    $this->startDate = $startDate;
  }
  public function getStartDate() {
    return $this->startDate;
  }
}

class GFGS_Google_DfareportingFile extends GFGS_Google_Model {
  protected $__dateRangeType = 'GFGS_Google_DateRange';
  protected $__dateRangeDataType = '';
  public $dateRange;
  public $etag;
  public $fileName;
  public $format;
  public $id;
  public $kind;
  public $lastModifiedTime;
  public $reportId;
  public $status;
  protected $__urlsType = 'GFGS_Google_DfareportingFileUrls';
  protected $__urlsDataType = '';
  public $urls;
  public function setDateRange(GFGS_Google_DateRange $dateRange) {
    $this->dateRange = $dateRange;
  }
  public function getDateRange() {
    return $this->dateRange;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setFileName($fileName) {
    $this->fileName = $fileName;
  }
  public function getFileName() {
    return $this->fileName;
  }
  public function setFormat($format) {
    $this->format = $format;
  }
  public function getFormat() {
    return $this->format;
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
  public function setLastModifiedTime($lastModifiedTime) {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  public function getLastModifiedTime() {
    return $this->lastModifiedTime;
  }
  public function setReportId($reportId) {
    $this->reportId = $reportId;
  }
  public function getReportId() {
    return $this->reportId;
  }
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setUrls(GFGS_Google_DfareportingFileUrls $urls) {
    $this->urls = $urls;
  }
  public function getUrls() {
    return $this->urls;
  }
}

class GFGS_Google_DfareportingFileUrls extends GFGS_Google_Model {
  public $apiUrl;
  public $browserUrl;
  public function setApiUrl($apiUrl) {
    $this->apiUrl = $apiUrl;
  }
  public function getApiUrl() {
    return $this->apiUrl;
  }
  public function setBrowserUrl($browserUrl) {
    $this->browserUrl = $browserUrl;
  }
  public function getBrowserUrl() {
    return $this->browserUrl;
  }
}

class GFGS_Google_DimensionFilter extends GFGS_Google_Model {
  public $dimensionName;
  public $kind;
  public $value;
  public function setDimensionName($dimensionName) {
    $this->dimensionName = $dimensionName;
  }
  public function getDimensionName() {
    return $this->dimensionName;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setValue($value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

class GFGS_Google_DimensionValue extends GFGS_Google_Model {
  public $dimensionName;
  public $etag;
  public $id;
  public $kind;
  public $value;
  public function setDimensionName($dimensionName) {
    $this->dimensionName = $dimensionName;
  }
  public function getDimensionName() {
    return $this->dimensionName;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
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
  public function setValue($value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

class GFGS_Google_DimensionValueList extends GFGS_Google_Model {
  public $etag;
  protected $__itemsType = 'GFGS_Google_DimensionValue';
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
  public function setItems(/* array(GFGS_Google_DimensionValue) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_DimensionValue', __METHOD__);
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

class GFGS_Google_DimensionValueRequest extends GFGS_Google_Model {
  public $dimensionName;
  public $endDate;
  protected $__filtersType = 'GFGS_Google_DimensionFilter';
  protected $__filtersDataType = 'array';
  public $filters;
  public $kind;
  public $startDate;
  public function setDimensionName($dimensionName) {
    $this->dimensionName = $dimensionName;
  }
  public function getDimensionName() {
    return $this->dimensionName;
  }
  public function setEndDate($endDate) {
    $this->endDate = $endDate;
  }
  public function getEndDate() {
    return $this->endDate;
  }
  public function setFilters(/* array(GFGS_Google_DimensionFilter) */ $filters) {
    $this->assertIsArray($filters, 'GFGS_Google_DimensionFilter', __METHOD__);
    $this->filters = $filters;
  }
  public function getFilters() {
    return $this->filters;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setStartDate($startDate) {
    $this->startDate = $startDate;
  }
  public function getStartDate() {
    return $this->startDate;
  }
}

class GFGS_Google_FileList extends GFGS_Google_Model {
  public $etag;
  protected $__itemsType = 'GFGS_Google_DfareportingFile';
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
  public function setItems(/* array(GFGS_Google_DfareportingFile) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_DfareportingFile', __METHOD__);
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

class GFGS_Google_Recipient extends GFGS_Google_Model {
  public $deliveryType;
  public $email;
  public $kind;
  public function setDeliveryType($deliveryType) {
    $this->deliveryType = $deliveryType;
  }
  public function getDeliveryType() {
    return $this->deliveryType;
  }
  public function setEmail($email) {
    $this->email = $email;
  }
  public function getEmail() {
    return $this->email;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class GFGS_Google_Report extends GFGS_Google_Model {
  public $accountId;
  protected $__activeGrpCriteriaType = 'GFGS_Google_ReportActiveGrpCriteria';
  protected $__activeGrpCriteriaDataType = '';
  public $activeGrpCriteria;
  protected $__criteriaType = 'GFGS_Google_ReportCriteria';
  protected $__criteriaDataType = '';
  public $criteria;
  protected $__crossDimensionReachCriteriaType = 'GFGS_Google_ReportCrossDimensionReachCriteria';
  protected $__crossDimensionReachCriteriaDataType = '';
  public $crossDimensionReachCriteria;
  protected $__deliveryType = 'GFGS_Google_ReportDelivery';
  protected $__deliveryDataType = '';
  public $delivery;
  public $etag;
  public $fileName;
  protected $__floodlightCriteriaType = 'GFGS_Google_ReportFloodlightCriteria';
  protected $__floodlightCriteriaDataType = '';
  public $floodlightCriteria;
  public $format;
  public $id;
  public $kind;
  public $lastModifiedTime;
  public $name;
  public $ownerProfileId;
  protected $__pathToConversionCriteriaType = 'GFGS_Google_ReportPathToConversionCriteria';
  protected $__pathToConversionCriteriaDataType = '';
  public $pathToConversionCriteria;
  protected $__reachCriteriaType = 'GFGS_Google_ReportReachCriteria';
  protected $__reachCriteriaDataType = '';
  public $reachCriteria;
  protected $__scheduleType = 'GFGS_Google_ReportSchedule';
  protected $__scheduleDataType = '';
  public $schedule;
  public $subAccountId;
  public $type;
  public function setAccountId($accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setActiveGrpCriteria(GFGS_Google_ReportActiveGrpCriteria $activeGrpCriteria) {
    $this->activeGrpCriteria = $activeGrpCriteria;
  }
  public function getActiveGrpCriteria() {
    return $this->activeGrpCriteria;
  }
  public function setCriteria(GFGS_Google_ReportCriteria $criteria) {
    $this->criteria = $criteria;
  }
  public function getCriteria() {
    return $this->criteria;
  }
  public function setCrossDimensionReachCriteria(GFGS_Google_ReportCrossDimensionReachCriteria $crossDimensionReachCriteria) {
    $this->crossDimensionReachCriteria = $crossDimensionReachCriteria;
  }
  public function getCrossDimensionReachCriteria() {
    return $this->crossDimensionReachCriteria;
  }
  public function setDelivery(GFGS_Google_ReportDelivery $delivery) {
    $this->delivery = $delivery;
  }
  public function getDelivery() {
    return $this->delivery;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setFileName($fileName) {
    $this->fileName = $fileName;
  }
  public function getFileName() {
    return $this->fileName;
  }
  public function setFloodlightCriteria(GFGS_Google_ReportFloodlightCriteria $floodlightCriteria) {
    $this->floodlightCriteria = $floodlightCriteria;
  }
  public function getFloodlightCriteria() {
    return $this->floodlightCriteria;
  }
  public function setFormat($format) {
    $this->format = $format;
  }
  public function getFormat() {
    return $this->format;
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
  public function setLastModifiedTime($lastModifiedTime) {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  public function getLastModifiedTime() {
    return $this->lastModifiedTime;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setOwnerProfileId($ownerProfileId) {
    $this->ownerProfileId = $ownerProfileId;
  }
  public function getOwnerProfileId() {
    return $this->ownerProfileId;
  }
  public function setPathToConversionCriteria(GFGS_Google_ReportPathToConversionCriteria $pathToConversionCriteria) {
    $this->pathToConversionCriteria = $pathToConversionCriteria;
  }
  public function getPathToConversionCriteria() {
    return $this->pathToConversionCriteria;
  }
  public function setReachCriteria(GFGS_Google_ReportReachCriteria $reachCriteria) {
    $this->reachCriteria = $reachCriteria;
  }
  public function getReachCriteria() {
    return $this->reachCriteria;
  }
  public function setSchedule(GFGS_Google_ReportSchedule $schedule) {
    $this->schedule = $schedule;
  }
  public function getSchedule() {
    return $this->schedule;
  }
  public function setSubAccountId($subAccountId) {
    $this->subAccountId = $subAccountId;
  }
  public function getSubAccountId() {
    return $this->subAccountId;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class GFGS_Google_ReportActiveGrpCriteria extends GFGS_Google_Model {
  protected $__dateRangeType = 'GFGS_Google_DateRange';
  protected $__dateRangeDataType = '';
  public $dateRange;
  protected $__dimensionFiltersType = 'GFGS_Google_DimensionValue';
  protected $__dimensionFiltersDataType = 'array';
  public $dimensionFilters;
  protected $__dimensionsType = 'GFGS_Google_SortedDimension';
  protected $__dimensionsDataType = 'array';
  public $dimensions;
  public $metricNames;
  public function setDateRange(GFGS_Google_DateRange $dateRange) {
    $this->dateRange = $dateRange;
  }
  public function getDateRange() {
    return $this->dateRange;
  }
  public function setDimensionFilters(/* array(GFGS_Google_DimensionValue) */ $dimensionFilters) {
    $this->assertIsArray($dimensionFilters, 'GFGS_Google_DimensionValue', __METHOD__);
    $this->dimensionFilters = $dimensionFilters;
  }
  public function getDimensionFilters() {
    return $this->dimensionFilters;
  }
  public function setDimensions(/* array(GFGS_Google_SortedDimension) */ $dimensions) {
    $this->assertIsArray($dimensions, 'GFGS_Google_SortedDimension', __METHOD__);
    $this->dimensions = $dimensions;
  }
  public function getDimensions() {
    return $this->dimensions;
  }
  public function setMetricNames($metricNames) {
    $this->metricNames = $metricNames;
  }
  public function getMetricNames() {
    return $this->metricNames;
  }
}

class GFGS_Google_ReportCriteria extends GFGS_Google_Model {
  protected $__activitiesType = 'GFGS_Google_Activities';
  protected $__activitiesDataType = '';
  public $activities;
  protected $__customRichMediaEventsType = 'GFGS_Google_CustomRichMediaEvents';
  protected $__customRichMediaEventsDataType = '';
  public $customRichMediaEvents;
  protected $__dateRangeType = 'GFGS_Google_DateRange';
  protected $__dateRangeDataType = '';
  public $dateRange;
  protected $__dimensionFiltersType = 'GFGS_Google_DimensionValue';
  protected $__dimensionFiltersDataType = 'array';
  public $dimensionFilters;
  protected $__dimensionsType = 'GFGS_Google_SortedDimension';
  protected $__dimensionsDataType = 'array';
  public $dimensions;
  public $metricNames;
  public function setActivities(GFGS_Google_Activities $activities) {
    $this->activities = $activities;
  }
  public function getActivities() {
    return $this->activities;
  }
  public function setCustomRichMediaEvents(GFGS_Google_CustomRichMediaEvents $customRichMediaEvents) {
    $this->customRichMediaEvents = $customRichMediaEvents;
  }
  public function getCustomRichMediaEvents() {
    return $this->customRichMediaEvents;
  }
  public function setDateRange(GFGS_Google_DateRange $dateRange) {
    $this->dateRange = $dateRange;
  }
  public function getDateRange() {
    return $this->dateRange;
  }
  public function setDimensionFilters(/* array(GFGS_Google_DimensionValue) */ $dimensionFilters) {
    $this->assertIsArray($dimensionFilters, 'GFGS_Google_DimensionValue', __METHOD__);
    $this->dimensionFilters = $dimensionFilters;
  }
  public function getDimensionFilters() {
    return $this->dimensionFilters;
  }
  public function setDimensions(/* array(GFGS_Google_SortedDimension) */ $dimensions) {
    $this->assertIsArray($dimensions, 'GFGS_Google_SortedDimension', __METHOD__);
    $this->dimensions = $dimensions;
  }
  public function getDimensions() {
    return $this->dimensions;
  }
  public function setMetricNames($metricNames) {
    $this->metricNames = $metricNames;
  }
  public function getMetricNames() {
    return $this->metricNames;
  }
}

class GFGS_Google_ReportCrossDimensionReachCriteria extends GFGS_Google_Model {
  protected $__breakdownType = 'GFGS_Google_SortedDimension';
  protected $__breakdownDataType = 'array';
  public $breakdown;
  protected $__dateRangeType = 'GFGS_Google_DateRange';
  protected $__dateRangeDataType = '';
  public $dateRange;
  public $dimension;
  protected $__dimensionFiltersType = 'GFGS_Google_DimensionValue';
  protected $__dimensionFiltersDataType = 'array';
  public $dimensionFilters;
  public $metricNames;
  public $overlapMetricNames;
  public $pivoted;
  public function setBreakdown(/* array(GFGS_Google_SortedDimension) */ $breakdown) {
    $this->assertIsArray($breakdown, 'GFGS_Google_SortedDimension', __METHOD__);
    $this->breakdown = $breakdown;
  }
  public function getBreakdown() {
    return $this->breakdown;
  }
  public function setDateRange(GFGS_Google_DateRange $dateRange) {
    $this->dateRange = $dateRange;
  }
  public function getDateRange() {
    return $this->dateRange;
  }
  public function setDimension($dimension) {
    $this->dimension = $dimension;
  }
  public function getDimension() {
    return $this->dimension;
  }
  public function setDimensionFilters(/* array(GFGS_Google_DimensionValue) */ $dimensionFilters) {
    $this->assertIsArray($dimensionFilters, 'GFGS_Google_DimensionValue', __METHOD__);
    $this->dimensionFilters = $dimensionFilters;
  }
  public function getDimensionFilters() {
    return $this->dimensionFilters;
  }
  public function setMetricNames($metricNames) {
    $this->metricNames = $metricNames;
  }
  public function getMetricNames() {
    return $this->metricNames;
  }
  public function setOverlapMetricNames($overlapMetricNames) {
    $this->overlapMetricNames = $overlapMetricNames;
  }
  public function getOverlapMetricNames() {
    return $this->overlapMetricNames;
  }
  public function setPivoted($pivoted) {
    $this->pivoted = $pivoted;
  }
  public function getPivoted() {
    return $this->pivoted;
  }
}

class GFGS_Google_ReportDelivery extends GFGS_Google_Model {
  public $emailOwner;
  public $emailOwnerDeliveryType;
  public $message;
  protected $__recipientsType = 'GFGS_Google_Recipient';
  protected $__recipientsDataType = 'array';
  public $recipients;
  public function setEmailOwner($emailOwner) {
    $this->emailOwner = $emailOwner;
  }
  public function getEmailOwner() {
    return $this->emailOwner;
  }
  public function setEmailOwnerDeliveryType($emailOwnerDeliveryType) {
    $this->emailOwnerDeliveryType = $emailOwnerDeliveryType;
  }
  public function getEmailOwnerDeliveryType() {
    return $this->emailOwnerDeliveryType;
  }
  public function setMessage($message) {
    $this->message = $message;
  }
  public function getMessage() {
    return $this->message;
  }
  public function setRecipients(/* array(GFGS_Google_Recipient) */ $recipients) {
    $this->assertIsArray($recipients, 'GFGS_Google_Recipient', __METHOD__);
    $this->recipients = $recipients;
  }
  public function getRecipients() {
    return $this->recipients;
  }
}

class GFGS_Google_ReportFloodlightCriteria extends GFGS_Google_Model {
  protected $__dateRangeType = 'GFGS_Google_DateRange';
  protected $__dateRangeDataType = '';
  public $dateRange;
  protected $__dimensionFiltersType = 'GFGS_Google_DimensionValue';
  protected $__dimensionFiltersDataType = 'array';
  public $dimensionFilters;
  protected $__dimensionsType = 'GFGS_Google_SortedDimension';
  protected $__dimensionsDataType = 'array';
  public $dimensions;
  protected $__floodlightConfigIdType = 'GFGS_Google_DimensionValue';
  protected $__floodlightConfigIdDataType = '';
  public $floodlightConfigId;
  public $metricNames;
  protected $__reportPropertiesType = 'GFGS_Google_ReportFloodlightCriteriaReportProperties';
  protected $__reportPropertiesDataType = '';
  public $reportProperties;
  public function setDateRange(GFGS_Google_DateRange $dateRange) {
    $this->dateRange = $dateRange;
  }
  public function getDateRange() {
    return $this->dateRange;
  }
  public function setDimensionFilters(/* array(GFGS_Google_DimensionValue) */ $dimensionFilters) {
    $this->assertIsArray($dimensionFilters, 'GFGS_Google_DimensionValue', __METHOD__);
    $this->dimensionFilters = $dimensionFilters;
  }
  public function getDimensionFilters() {
    return $this->dimensionFilters;
  }
  public function setDimensions(/* array(GFGS_Google_SortedDimension) */ $dimensions) {
    $this->assertIsArray($dimensions, 'GFGS_Google_SortedDimension', __METHOD__);
    $this->dimensions = $dimensions;
  }
  public function getDimensions() {
    return $this->dimensions;
  }
  public function setFloodlightConfigId(GFGS_Google_DimensionValue $floodlightConfigId) {
    $this->floodlightConfigId = $floodlightConfigId;
  }
  public function getFloodlightConfigId() {
    return $this->floodlightConfigId;
  }
  public function setMetricNames($metricNames) {
    $this->metricNames = $metricNames;
  }
  public function getMetricNames() {
    return $this->metricNames;
  }
  public function setReportProperties(GFGS_Google_ReportFloodlightCriteriaReportProperties $reportProperties) {
    $this->reportProperties = $reportProperties;
  }
  public function getReportProperties() {
    return $this->reportProperties;
  }
}

class GFGS_Google_ReportFloodlightCriteriaReportProperties extends GFGS_Google_Model {
  public $includeAttributedIPConversions;
  public $includeUnattributedCookieConversions;
  public $includeUnattributedIPConversions;
  public function setIncludeAttributedIPConversions($includeAttributedIPConversions) {
    $this->includeAttributedIPConversions = $includeAttributedIPConversions;
  }
  public function getIncludeAttributedIPConversions() {
    return $this->includeAttributedIPConversions;
  }
  public function setIncludeUnattributedCookieConversions($includeUnattributedCookieConversions) {
    $this->includeUnattributedCookieConversions = $includeUnattributedCookieConversions;
  }
  public function getIncludeUnattributedCookieConversions() {
    return $this->includeUnattributedCookieConversions;
  }
  public function setIncludeUnattributedIPConversions($includeUnattributedIPConversions) {
    $this->includeUnattributedIPConversions = $includeUnattributedIPConversions;
  }
  public function getIncludeUnattributedIPConversions() {
    return $this->includeUnattributedIPConversions;
  }
}

class GFGS_Google_ReportList extends GFGS_Google_Model {
  public $etag;
  protected $__itemsType = 'GFGS_Google_Report';
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
  public function setItems(/* array(GFGS_Google_Report) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_Report', __METHOD__);
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

class GFGS_Google_ReportPathToConversionCriteria extends GFGS_Google_Model {
  protected $__activityFiltersType = 'GFGS_Google_DimensionValue';
  protected $__activityFiltersDataType = 'array';
  public $activityFilters;
  protected $__conversionDimensionsType = 'GFGS_Google_SortedDimension';
  protected $__conversionDimensionsDataType = 'array';
  public $conversionDimensions;
  protected $__customFloodlightVariablesType = 'GFGS_Google_SortedDimension';
  protected $__customFloodlightVariablesDataType = 'array';
  public $customFloodlightVariables;
  protected $__dateRangeType = 'GFGS_Google_DateRange';
  protected $__dateRangeDataType = '';
  public $dateRange;
  protected $__floodlightConfigIdType = 'GFGS_Google_DimensionValue';
  protected $__floodlightConfigIdDataType = '';
  public $floodlightConfigId;
  public $metricNames;
  protected $__perInteractionDimensionsType = 'GFGS_Google_SortedDimension';
  protected $__perInteractionDimensionsDataType = 'array';
  public $perInteractionDimensions;
  protected $__reportPropertiesType = 'GFGS_Google_ReportPathToConversionCriteriaReportProperties';
  protected $__reportPropertiesDataType = '';
  public $reportProperties;
  public function setActivityFilters(/* array(GFGS_Google_DimensionValue) */ $activityFilters) {
    $this->assertIsArray($activityFilters, 'GFGS_Google_DimensionValue', __METHOD__);
    $this->activityFilters = $activityFilters;
  }
  public function getActivityFilters() {
    return $this->activityFilters;
  }
  public function setConversionDimensions(/* array(GFGS_Google_SortedDimension) */ $conversionDimensions) {
    $this->assertIsArray($conversionDimensions, 'GFGS_Google_SortedDimension', __METHOD__);
    $this->conversionDimensions = $conversionDimensions;
  }
  public function getConversionDimensions() {
    return $this->conversionDimensions;
  }
  public function setCustomFloodlightVariables(/* array(GFGS_Google_SortedDimension) */ $customFloodlightVariables) {
    $this->assertIsArray($customFloodlightVariables, 'GFGS_Google_SortedDimension', __METHOD__);
    $this->customFloodlightVariables = $customFloodlightVariables;
  }
  public function getCustomFloodlightVariables() {
    return $this->customFloodlightVariables;
  }
  public function setDateRange(GFGS_Google_DateRange $dateRange) {
    $this->dateRange = $dateRange;
  }
  public function getDateRange() {
    return $this->dateRange;
  }
  public function setFloodlightConfigId(GFGS_Google_DimensionValue $floodlightConfigId) {
    $this->floodlightConfigId = $floodlightConfigId;
  }
  public function getFloodlightConfigId() {
    return $this->floodlightConfigId;
  }
  public function setMetricNames($metricNames) {
    $this->metricNames = $metricNames;
  }
  public function getMetricNames() {
    return $this->metricNames;
  }
  public function setPerInteractionDimensions(/* array(GFGS_Google_SortedDimension) */ $perInteractionDimensions) {
    $this->assertIsArray($perInteractionDimensions, 'GFGS_Google_SortedDimension', __METHOD__);
    $this->perInteractionDimensions = $perInteractionDimensions;
  }
  public function getPerInteractionDimensions() {
    return $this->perInteractionDimensions;
  }
  public function setReportProperties(GFGS_Google_ReportPathToConversionCriteriaReportProperties $reportProperties) {
    $this->reportProperties = $reportProperties;
  }
  public function getReportProperties() {
    return $this->reportProperties;
  }
}

class GFGS_Google_ReportPathToConversionCriteriaReportProperties extends GFGS_Google_Model {
  public $clicksLookbackWindow;
  public $impressionsLookbackWindow;
  public $includeAttributedIPConversions;
  public $includeUnattributedCookieConversions;
  public $includeUnattributedIPConversions;
  public $maximumClickInteractions;
  public $maximumImpressionInteractions;
  public $maximumInteractionGap;
  public $pivotOnInteractionPath;
  public function setClicksLookbackWindow($clicksLookbackWindow) {
    $this->clicksLookbackWindow = $clicksLookbackWindow;
  }
  public function getClicksLookbackWindow() {
    return $this->clicksLookbackWindow;
  }
  public function setImpressionsLookbackWindow($impressionsLookbackWindow) {
    $this->impressionsLookbackWindow = $impressionsLookbackWindow;
  }
  public function getImpressionsLookbackWindow() {
    return $this->impressionsLookbackWindow;
  }
  public function setIncludeAttributedIPConversions($includeAttributedIPConversions) {
    $this->includeAttributedIPConversions = $includeAttributedIPConversions;
  }
  public function getIncludeAttributedIPConversions() {
    return $this->includeAttributedIPConversions;
  }
  public function setIncludeUnattributedCookieConversions($includeUnattributedCookieConversions) {
    $this->includeUnattributedCookieConversions = $includeUnattributedCookieConversions;
  }
  public function getIncludeUnattributedCookieConversions() {
    return $this->includeUnattributedCookieConversions;
  }
  public function setIncludeUnattributedIPConversions($includeUnattributedIPConversions) {
    $this->includeUnattributedIPConversions = $includeUnattributedIPConversions;
  }
  public function getIncludeUnattributedIPConversions() {
    return $this->includeUnattributedIPConversions;
  }
  public function setMaximumClickInteractions($maximumClickInteractions) {
    $this->maximumClickInteractions = $maximumClickInteractions;
  }
  public function getMaximumClickInteractions() {
    return $this->maximumClickInteractions;
  }
  public function setMaximumImpressionInteractions($maximumImpressionInteractions) {
    $this->maximumImpressionInteractions = $maximumImpressionInteractions;
  }
  public function getMaximumImpressionInteractions() {
    return $this->maximumImpressionInteractions;
  }
  public function setMaximumInteractionGap($maximumInteractionGap) {
    $this->maximumInteractionGap = $maximumInteractionGap;
  }
  public function getMaximumInteractionGap() {
    return $this->maximumInteractionGap;
  }
  public function setPivotOnInteractionPath($pivotOnInteractionPath) {
    $this->pivotOnInteractionPath = $pivotOnInteractionPath;
  }
  public function getPivotOnInteractionPath() {
    return $this->pivotOnInteractionPath;
  }
}

class GFGS_Google_ReportReachCriteria extends GFGS_Google_Model {
  protected $__activitiesType = 'GFGS_Google_Activities';
  protected $__activitiesDataType = '';
  public $activities;
  protected $__customRichMediaEventsType = 'GFGS_Google_CustomRichMediaEvents';
  protected $__customRichMediaEventsDataType = '';
  public $customRichMediaEvents;
  protected $__dateRangeType = 'GFGS_Google_DateRange';
  protected $__dateRangeDataType = '';
  public $dateRange;
  protected $__dimensionFiltersType = 'GFGS_Google_DimensionValue';
  protected $__dimensionFiltersDataType = 'array';
  public $dimensionFilters;
  protected $__dimensionsType = 'GFGS_Google_SortedDimension';
  protected $__dimensionsDataType = 'array';
  public $dimensions;
  public $metricNames;
  public $reachByFrequencyMetricNames;
  public function setActivities(GFGS_Google_Activities $activities) {
    $this->activities = $activities;
  }
  public function getActivities() {
    return $this->activities;
  }
  public function setCustomRichMediaEvents(GFGS_Google_CustomRichMediaEvents $customRichMediaEvents) {
    $this->customRichMediaEvents = $customRichMediaEvents;
  }
  public function getCustomRichMediaEvents() {
    return $this->customRichMediaEvents;
  }
  public function setDateRange(GFGS_Google_DateRange $dateRange) {
    $this->dateRange = $dateRange;
  }
  public function getDateRange() {
    return $this->dateRange;
  }
  public function setDimensionFilters(/* array(GFGS_Google_DimensionValue) */ $dimensionFilters) {
    $this->assertIsArray($dimensionFilters, 'GFGS_Google_DimensionValue', __METHOD__);
    $this->dimensionFilters = $dimensionFilters;
  }
  public function getDimensionFilters() {
    return $this->dimensionFilters;
  }
  public function setDimensions(/* array(GFGS_Google_SortedDimension) */ $dimensions) {
    $this->assertIsArray($dimensions, 'GFGS_Google_SortedDimension', __METHOD__);
    $this->dimensions = $dimensions;
  }
  public function getDimensions() {
    return $this->dimensions;
  }
  public function setMetricNames($metricNames) {
    $this->metricNames = $metricNames;
  }
  public function getMetricNames() {
    return $this->metricNames;
  }
  public function setReachByFrequencyMetricNames($reachByFrequencyMetricNames) {
    $this->reachByFrequencyMetricNames = $reachByFrequencyMetricNames;
  }
  public function getReachByFrequencyMetricNames() {
    return $this->reachByFrequencyMetricNames;
  }
}

class GFGS_Google_ReportSchedule extends GFGS_Google_Model {
  public $active;
  public $every;
  public $expirationDate;
  public $repeats;
  public $repeatsOnWeekDays;
  public $runsOnDayOfMonth;
  public $startDate;
  public function setActive($active) {
    $this->active = $active;
  }
  public function getActive() {
    return $this->active;
  }
  public function setEvery($every) {
    $this->every = $every;
  }
  public function getEvery() {
    return $this->every;
  }
  public function setExpirationDate($expirationDate) {
    $this->expirationDate = $expirationDate;
  }
  public function getExpirationDate() {
    return $this->expirationDate;
  }
  public function setRepeats($repeats) {
    $this->repeats = $repeats;
  }
  public function getRepeats() {
    return $this->repeats;
  }
  public function setRepeatsOnWeekDays($repeatsOnWeekDays) {
    $this->repeatsOnWeekDays = $repeatsOnWeekDays;
  }
  public function getRepeatsOnWeekDays() {
    return $this->repeatsOnWeekDays;
  }
  public function setRunsOnDayOfMonth($runsOnDayOfMonth) {
    $this->runsOnDayOfMonth = $runsOnDayOfMonth;
  }
  public function getRunsOnDayOfMonth() {
    return $this->runsOnDayOfMonth;
  }
  public function setStartDate($startDate) {
    $this->startDate = $startDate;
  }
  public function getStartDate() {
    return $this->startDate;
  }
}

class GFGS_Google_SortedDimension extends GFGS_Google_Model {
  public $kind;
  public $name;
  public $sortOrder;
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
  public function setSortOrder($sortOrder) {
    $this->sortOrder = $sortOrder;
  }
  public function getSortOrder() {
    return $this->sortOrder;
  }
}

class GFGS_Google_UserProfile extends GFGS_Google_Model {
  public $accountId;
  public $accountName;
  public $etag;
  public $kind;
  public $profileId;
  public $subAccountId;
  public $subAccountName;
  public $userName;
  public function setAccountId($accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setAccountName($accountName) {
    $this->accountName = $accountName;
  }
  public function getAccountName() {
    return $this->accountName;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setProfileId($profileId) {
    $this->profileId = $profileId;
  }
  public function getProfileId() {
    return $this->profileId;
  }
  public function setSubAccountId($subAccountId) {
    $this->subAccountId = $subAccountId;
  }
  public function getSubAccountId() {
    return $this->subAccountId;
  }
  public function setSubAccountName($subAccountName) {
    $this->subAccountName = $subAccountName;
  }
  public function getSubAccountName() {
    return $this->subAccountName;
  }
  public function setUserName($userName) {
    $this->userName = $userName;
  }
  public function getUserName() {
    return $this->userName;
  }
}

class GFGS_Google_UserProfileList extends GFGS_Google_Model {
  public $etag;
  protected $__itemsType = 'GFGS_Google_UserProfile';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(GFGS_Google_UserProfile) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_UserProfile', __METHOD__);
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
}
