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
   * The "accounts" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adsenseService = new GFGS_Google_AdSenseService(...);
   *   $accounts = $adsenseService->accounts;
   *  </code>
   */
  class GFGS_Google_AccountsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Get information about the selected AdSense account. (accounts.get)
     *
     * @param string $accountId Account to get information about.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool tree Whether the tree of sub accounts should be returned.
     * @return GFGS_Google_Account
     */
    public function get($accountId, $optParams = array()) {
      $params = array('accountId' => $accountId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Account($data);
      } else {
        return $data;
      }
    }
    /**
     * List all accounts available to this AdSense account. (accounts.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of accounts to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through accounts. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return GFGS_Google_Accounts
     */
    public function listAccounts($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Accounts($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "adclients" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adsenseService = new GFGS_Google_AdSenseService(...);
   *   $adclients = $adsenseService->adclients;
   *  </code>
   */
  class GFGS_Google_AccountsAdclientsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * List all ad clients in the specified account. (adclients.list)
     *
     * @param string $accountId Account for which to list ad clients.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of ad clients to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad clients. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return GFGS_Google_AdClients
     */
    public function listAccountsAdclients($accountId, $optParams = array()) {
      $params = array('accountId' => $accountId);
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
   *   $adsenseService = new GFGS_Google_AdSenseService(...);
   *   $adunits = $adsenseService->adunits;
   *  </code>
   */
  class GFGS_Google_AccountsAdunitsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Gets the specified ad unit in the specified ad client for the specified account. (adunits.get)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client for which to get the ad unit.
     * @param string $adUnitId Ad unit to retrieve.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_AdUnit
     */
    public function get($accountId, $adClientId, $adUnitId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'adClientId' => $adClientId, 'adUnitId' => $adUnitId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_AdUnit($data);
      } else {
        return $data;
      }
    }
    /**
     * List all ad units in the specified ad client for the specified account. (adunits.list)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client for which to list ad units.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeInactive Whether to include inactive ad units. Default: true.
     * @opt_param int maxResults The maximum number of ad units to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad units. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return GFGS_Google_AdUnits
     */
    public function listAccountsAdunits($accountId, $adClientId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'adClientId' => $adClientId);
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
   *   $adsenseService = new GFGS_Google_AdSenseService(...);
   *   $customchannels = $adsenseService->customchannels;
   *  </code>
   */
  class GFGS_Google_AccountsAdunitsCustomchannelsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * List all custom channels which the specified ad unit belongs to. (customchannels.list)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client which contains the ad unit.
     * @param string $adUnitId Ad unit for which to list custom channels.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of custom channels to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through custom channels. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return GFGS_Google_CustomChannels
     */
    public function listAccountsAdunitsCustomchannels($accountId, $adClientId, $adUnitId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'adClientId' => $adClientId, 'adUnitId' => $adUnitId);
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
   *   $adsenseService = new GFGS_Google_AdSenseService(...);
   *   $customchannels = $adsenseService->customchannels;
   *  </code>
   */
  class GFGS_Google_AccountsCustomchannelsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Get the specified custom channel from the specified ad client for the specified account.
     * (customchannels.get)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client which contains the custom channel.
     * @param string $customChannelId Custom channel to retrieve.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_CustomChannel
     */
    public function get($accountId, $adClientId, $customChannelId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'adClientId' => $adClientId, 'customChannelId' => $customChannelId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_CustomChannel($data);
      } else {
        return $data;
      }
    }
    /**
     * List all custom channels in the specified ad client for the specified account.
     * (customchannels.list)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client for which to list custom channels.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of custom channels to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through custom channels. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return GFGS_Google_CustomChannels
     */
    public function listAccountsCustomchannels($accountId, $adClientId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'adClientId' => $adClientId);
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
   *   $adsenseService = new GFGS_Google_AdSenseService(...);
   *   $adunits = $adsenseService->adunits;
   *  </code>
   */
  class GFGS_Google_AccountsCustomchannelsAdunitsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * List all ad units in the specified custom channel. (adunits.list)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client which contains the custom channel.
     * @param string $customChannelId Custom channel for which to list ad units.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeInactive Whether to include inactive ad units. Default: true.
     * @opt_param int maxResults The maximum number of ad units to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad units. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return GFGS_Google_AdUnits
     */
    public function listAccountsCustomchannelsAdunits($accountId, $adClientId, $customChannelId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'adClientId' => $adClientId, 'customChannelId' => $customChannelId);
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
   *   $adsenseService = new GFGS_Google_AdSenseService(...);
   *   $reports = $adsenseService->reports;
   *  </code>
   */
  class GFGS_Google_AccountsReportsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Generate an AdSense report based on the report request sent in the query parameters. Returns the
     * result as JSON; to retrieve output in CSV format specify "alt=csv" as a query parameter.
     * (reports.generate)
     *
     * @param string $accountId Account upon which to report.
     * @param string $startDate Start of the date range to report on in "YYYY-MM-DD" format, inclusive.
     * @param string $endDate End of the date range to report on in "YYYY-MM-DD" format, inclusive.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string currency Optional currency to use when reporting on monetary metrics. Defaults to the account's currency if not set.
     * @opt_param string dimension Dimensions to base the report on.
     * @opt_param string filter Filters to be run on the report.
     * @opt_param string locale Optional locale to use for translating report output to a local language. Defaults to "en_US" if not specified.
     * @opt_param int maxResults The maximum number of rows of report data to return.
     * @opt_param string metric Numeric columns to include in the report.
     * @opt_param string sort The name of a dimension or metric to sort the resulting report on, optionally prefixed with "+" to sort ascending or "-" to sort descending. If no prefix is specified, the column is sorted ascending.
     * @opt_param int startIndex Index of the first row of report data to return.
     * @return GFGS_Google_AdsenseReportsGenerateResponse
     */
    public function generate($accountId, $startDate, $endDate, $optParams = array()) {
      $params = array('accountId' => $accountId, 'startDate' => $startDate, 'endDate' => $endDate);
      $params = array_merge($params, $optParams);
      $data = $this->__call('generate', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_AdsenseReportsGenerateResponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "saved" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adsenseService = new GFGS_Google_AdSenseService(...);
   *   $saved = $adsenseService->saved;
   *  </code>
   */
  class GFGS_Google_AccountsReportsSavedServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Generate an AdSense report based on the saved report ID sent in the query parameters.
     * (saved.generate)
     *
     * @param string $accountId Account to which the saved reports belong.
     * @param string $savedReportId The saved report to retrieve.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string locale Optional locale to use for translating report output to a local language. Defaults to "en_US" if not specified.
     * @opt_param int maxResults The maximum number of rows of report data to return.
     * @opt_param int startIndex Index of the first row of report data to return.
     * @return GFGS_Google_AdsenseReportsGenerateResponse
     */
    public function generate($accountId, $savedReportId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'savedReportId' => $savedReportId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('generate', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_AdsenseReportsGenerateResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * List all saved reports in the specified AdSense account. (saved.list)
     *
     * @param string $accountId Account to which the saved reports belong.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of saved reports to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through saved reports. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return GFGS_Google_SavedReports
     */
    public function listAccountsReportsSaved($accountId, $optParams = array()) {
      $params = array('accountId' => $accountId);
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
   * The "savedadstyles" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adsenseService = new GFGS_Google_AdSenseService(...);
   *   $savedadstyles = $adsenseService->savedadstyles;
   *  </code>
   */
  class GFGS_Google_AccountsSavedadstylesServiceResource extends GFGS_Google_ServiceResource {


    /**
     * List a specific saved ad style for the specified account. (savedadstyles.get)
     *
     * @param string $accountId Account for which to get the saved ad style.
     * @param string $savedAdStyleId Saved ad style to retrieve.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_SavedAdStyle
     */
    public function get($accountId, $savedAdStyleId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'savedAdStyleId' => $savedAdStyleId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_SavedAdStyle($data);
      } else {
        return $data;
      }
    }
    /**
     * List all saved ad styles in the specified account. (savedadstyles.list)
     *
     * @param string $accountId Account for which to list saved ad styles.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of saved ad styles to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through saved ad styles. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return Google_SavedAdStyles
     */
    public function listAccountsSavedadstyles($accountId, $optParams = array()) {
      $params = array('accountId' => $accountId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_SavedAdStyles($data);
      } else {
        return $data;
      }
    }
  }
  /**
   * The "urlchannels" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adsenseService = new GFGS_Google_AdSenseService(...);
   *   $urlchannels = $adsenseService->urlchannels;
   *  </code>
   */
  class GFGS_Google_AccountsUrlchannelsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * List all URL channels in the specified ad client for the specified account. (urlchannels.list)
     *
     * @param string $accountId Account to which the ad client belongs.
     * @param string $adClientId Ad client for which to list URL channels.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of URL channels to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through URL channels. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return GFGS_Google_UrlChannels
     */
    public function listAccountsUrlchannels($accountId, $adClientId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'adClientId' => $adClientId);
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
   * The "adclients" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adsenseService = new GFGS_Google_AdSenseService(...);
   *   $adclients = $adsenseService->adclients;
   *  </code>
   */
  class GFGS_Google_AdclientsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * List all ad clients in this AdSense account. (adclients.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of ad clients to include in the response, used for paging.
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
   *   $adsenseService = new GFGS_Google_AdSenseService(...);
   *   $adunits = $adsenseService->adunits;
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
     * List all ad units in the specified ad client for this AdSense account. (adunits.list)
     *
     * @param string $adClientId Ad client for which to list ad units.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeInactive Whether to include inactive ad units. Default: true.
     * @opt_param int maxResults The maximum number of ad units to include in the response, used for paging.
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
   *   $adsenseService = new GFGS_Google_AdSenseService(...);
   *   $customchannels = $adsenseService->customchannels;
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
     * @opt_param int maxResults The maximum number of custom channels to include in the response, used for paging.
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
   *   $adsenseService = new GFGS_Google_AdSenseService(...);
   *   $customchannels = $adsenseService->customchannels;
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
     * List all custom channels in the specified ad client for this AdSense account.
     * (customchannels.list)
     *
     * @param string $adClientId Ad client for which to list custom channels.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of custom channels to include in the response, used for paging.
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
   *   $adsenseService = new GFGS_Google_AdSenseService(...);
   *   $adunits = $adsenseService->adunits;
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
     * @opt_param int maxResults The maximum number of ad units to include in the response, used for paging.
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
   *   $adsenseService = new GFGS_Google_AdSenseService(...);
   *   $reports = $adsenseService->reports;
   *  </code>
   */
  class GFGS_Google_ReportsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Generate an AdSense report based on the report request sent in the query parameters. Returns the
     * result as JSON; to retrieve output in CSV format specify "alt=csv" as a query parameter.
     * (reports.generate)
     *
     * @param string $startDate Start of the date range to report on in "YYYY-MM-DD" format, inclusive.
     * @param string $endDate End of the date range to report on in "YYYY-MM-DD" format, inclusive.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string accountId Accounts upon which to report.
     * @opt_param string currency Optional currency to use when reporting on monetary metrics. Defaults to the account's currency if not set.
     * @opt_param string dimension Dimensions to base the report on.
     * @opt_param string filter Filters to be run on the report.
     * @opt_param string locale Optional locale to use for translating report output to a local language. Defaults to "en_US" if not specified.
     * @opt_param int maxResults The maximum number of rows of report data to return.
     * @opt_param string metric Numeric columns to include in the report.
     * @opt_param string sort The name of a dimension or metric to sort the resulting report on, optionally prefixed with "+" to sort ascending or "-" to sort descending. If no prefix is specified, the column is sorted ascending.
     * @opt_param int startIndex Index of the first row of report data to return.
     * @return GFGS_Google_AdsenseReportsGenerateResponse
     */
    public function generate($startDate, $endDate, $optParams = array()) {
      $params = array('startDate' => $startDate, 'endDate' => $endDate);
      $params = array_merge($params, $optParams);
      $data = $this->__call('generate', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_AdsenseReportsGenerateResponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "saved" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adsenseService = new GFGS_Google_AdSenseService(...);
   *   $saved = $adsenseService->saved;
   *  </code>
   */
  class GFGS_Google_ReportsSavedServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Generate an AdSense report based on the saved report ID sent in the query parameters.
     * (saved.generate)
     *
     * @param string $savedReportId The saved report to retrieve.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string locale Optional locale to use for translating report output to a local language. Defaults to "en_US" if not specified.
     * @opt_param int maxResults The maximum number of rows of report data to return.
     * @opt_param int startIndex Index of the first row of report data to return.
     * @return GFGS_Google_AdsenseReportsGenerateResponse
     */
    public function generate($savedReportId, $optParams = array()) {
      $params = array('savedReportId' => $savedReportId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('generate', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_AdsenseReportsGenerateResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * List all saved reports in this AdSense account. (saved.list)
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
   * The "savedadstyles" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adsenseService = new GFGS_Google_AdSenseService(...);
   *   $savedadstyles = $adsenseService->savedadstyles;
   *  </code>
   */
  class GFGS_Google_SavedadstylesServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Get a specific saved ad style from the user's account. (savedadstyles.get)
     *
     * @param string $savedAdStyleId Saved ad style to retrieve.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_SavedAdStyle
     */
    public function get($savedAdStyleId, $optParams = array()) {
      $params = array('savedAdStyleId' => $savedAdStyleId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_SavedAdStyle($data);
      } else {
        return $data;
      }
    }
    /**
     * List all saved ad styles in the user's account. (savedadstyles.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of saved ad styles to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through saved ad styles. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return Google_SavedAdStyles
     */
    public function listSavedadstyles($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_SavedAdStyles($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "urlchannels" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adsenseService = new GFGS_Google_AdSenseService(...);
   *   $urlchannels = $adsenseService->urlchannels;
   *  </code>
   */
  class GFGS_Google_UrlchannelsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * List all URL channels in the specified ad client for this AdSense account. (urlchannels.list)
     *
     * @param string $adClientId Ad client for which to list URL channels.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of URL channels to include in the response, used for paging.
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
 * Service definition for Google_AdSense (v1.2).
 *
 * <p>
 * Gives AdSense publishers access to their inventory and the ability to generate reports
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/adsense/management/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class GFGS_Google_AdSenseService extends GFGS_Google_Service {
  public $accounts;
  public $accounts_adclients;
  public $accounts_adunits;
  public $accounts_adunits_customchannels;
  public $accounts_customchannels;
  public $accounts_customchannels_adunits;
  public $accounts_reports;
  public $accounts_reports_saved;
  public $accounts_savedadstyles;
  public $accounts_urlchannels;
  public $adclients;
  public $adunits;
  public $adunits_customchannels;
  public $customchannels;
  public $customchannels_adunits;
  public $reports;
  public $reports_saved;
  public $savedadstyles;
  public $urlchannels;
  /**
   * Constructs the internal representation of the AdSense service.
   *
   * @param GFGSC_Google_Client_Connector $client
   */
  public function __construct(GFGSC_Google_Client_Connector $client) {
    $this->servicePath = 'adsense/v1.2/';
    $this->version = 'v1.2';
    $this->serviceName = 'adsense';

    $client->addService($this->serviceName, $this->version);
    $this->accounts = new GFGS_Google_AccountsServiceResource($this, $this->serviceName, 'accounts', json_decode('{"methods": {"get": {"id": "adsense.accounts.get", "path": "accounts/{accountId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "tree": {"type": "boolean", "location": "query"}}, "response": {"$ref": "Account"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}, "list": {"id": "adsense.accounts.list", "path": "accounts", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "Accounts"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
    $this->accounts_adclients = new GFGS_Google_AccountsAdclientsServiceResource($this, $this->serviceName, 'adclients', json_decode('{"methods": {"list": {"id": "adsense.accounts.adclients.list", "path": "accounts/{accountId}/adclients", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdClients"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
    $this->accounts_adunits = new GFGS_Google_AccountsAdunitsServiceResource($this, $this->serviceName, 'adunits', json_decode('{"methods": {"get": {"id": "adsense.accounts.adunits.get", "path": "accounts/{accountId}/adclients/{adClientId}/adunits/{adUnitId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AdUnit"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}, "list": {"id": "adsense.accounts.adunits.list", "path": "accounts/{accountId}/adclients/{adClientId}/adunits", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}, "includeInactive": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdUnits"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
    $this->accounts_adunits_customchannels = new GFGS_Google_AccountsAdunitsCustomchannelsServiceResource($this, $this->serviceName, 'customchannels', json_decode('{"methods": {"list": {"id": "adsense.accounts.adunits.customchannels.list", "path": "accounts/{accountId}/adclients/{adClientId}/adunits/{adUnitId}/customchannels", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CustomChannels"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
    $this->accounts_customchannels = new GFGS_Google_AccountsCustomchannelsServiceResource($this, $this->serviceName, 'customchannels', json_decode('{"methods": {"get": {"id": "adsense.accounts.customchannels.get", "path": "accounts/{accountId}/adclients/{adClientId}/customchannels/{customChannelId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}, "customChannelId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CustomChannel"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}, "list": {"id": "adsense.accounts.customchannels.list", "path": "accounts/{accountId}/adclients/{adClientId}/customchannels", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CustomChannels"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
    $this->accounts_customchannels_adunits = new GFGS_Google_AccountsCustomchannelsAdunitsServiceResource($this, $this->serviceName, 'adunits', json_decode('{"methods": {"list": {"id": "adsense.accounts.customchannels.adunits.list", "path": "accounts/{accountId}/adclients/{adClientId}/customchannels/{customChannelId}/adunits", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}, "customChannelId": {"type": "string", "required": true, "location": "path"}, "includeInactive": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdUnits"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
    $this->accounts_reports = new GFGS_Google_AccountsReportsServiceResource($this, $this->serviceName, 'reports', json_decode('{"methods": {"generate": {"id": "adsense.accounts.reports.generate", "path": "accounts/{accountId}/reports", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "currency": {"type": "string", "location": "query"}, "dimension": {"type": "string", "repeated": true, "location": "query"}, "endDate": {"type": "string", "required": true, "location": "query"}, "filter": {"type": "string", "repeated": true, "location": "query"}, "locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "50000", "location": "query"}, "metric": {"type": "string", "repeated": true, "location": "query"}, "sort": {"type": "string", "repeated": true, "location": "query"}, "startDate": {"type": "string", "required": true, "location": "query"}, "startIndex": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "5000", "location": "query"}}, "response": {"$ref": "AdsenseReportsGenerateResponse"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"], "supportsMediaDownload": true}}}', true));
    $this->accounts_reports_saved = new GFGS_Google_AccountsReportsSavedServiceResource($this, $this->serviceName, 'saved', json_decode('{"methods": {"generate": {"id": "adsense.accounts.reports.saved.generate", "path": "accounts/{accountId}/reports/{savedReportId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "50000", "location": "query"}, "savedReportId": {"type": "string", "required": true, "location": "path"}, "startIndex": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "5000", "location": "query"}}, "response": {"$ref": "AdsenseReportsGenerateResponse"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}, "list": {"id": "adsense.accounts.reports.saved.list", "path": "accounts/{accountId}/reports/saved", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "SavedReports"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
    $this->accounts_savedadstyles = new GFGS_Google_AccountsSavedadstylesServiceResource($this, $this->serviceName, 'savedadstyles', json_decode('{"methods": {"get": {"id": "adsense.accounts.savedadstyles.get", "path": "accounts/{accountId}/savedadstyles/{savedAdStyleId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "savedAdStyleId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "SavedAdStyle"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}, "list": {"id": "adsense.accounts.savedadstyles.list", "path": "accounts/{accountId}/savedadstyles", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "SavedAdStyles"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
    $this->accounts_urlchannels = new GFGS_Google_AccountsUrlchannelsServiceResource($this, $this->serviceName, 'urlchannels', json_decode('{"methods": {"list": {"id": "adsense.accounts.urlchannels.list", "path": "accounts/{accountId}/adclients/{adClientId}/urlchannels", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "adClientId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "UrlChannels"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
    $this->adclients = new GFGS_Google_AdclientsServiceResource($this, $this->serviceName, 'adclients', json_decode('{"methods": {"list": {"id": "adsense.adclients.list", "path": "adclients", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdClients"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
    $this->adunits = new GFGS_Google_AdunitsServiceResource($this, $this->serviceName, 'adunits', json_decode('{"methods": {"get": {"id": "adsense.adunits.get", "path": "adclients/{adClientId}/adunits/{adUnitId}", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AdUnit"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}, "list": {"id": "adsense.adunits.list", "path": "adclients/{adClientId}/adunits", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "includeInactive": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdUnits"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
    $this->adunits_customchannels = new GFGS_Google_AdunitsCustomchannelsServiceResource($this, $this->serviceName, 'customchannels', json_decode('{"methods": {"list": {"id": "adsense.adunits.customchannels.list", "path": "adclients/{adClientId}/adunits/{adUnitId}/customchannels", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CustomChannels"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
    $this->customchannels = new GFGS_Google_CustomchannelsServiceResource($this, $this->serviceName, 'customchannels', json_decode('{"methods": {"get": {"id": "adsense.customchannels.get", "path": "adclients/{adClientId}/customchannels/{customChannelId}", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "customChannelId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CustomChannel"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}, "list": {"id": "adsense.customchannels.list", "path": "adclients/{adClientId}/customchannels", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CustomChannels"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
    $this->customchannels_adunits = new GFGS_Google_CustomchannelsAdunitsServiceResource($this, $this->serviceName, 'adunits', json_decode('{"methods": {"list": {"id": "adsense.customchannels.adunits.list", "path": "adclients/{adClientId}/customchannels/{customChannelId}/adunits", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "customChannelId": {"type": "string", "required": true, "location": "path"}, "includeInactive": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdUnits"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
    $this->reports = new GFGS_Google_ReportsServiceResource($this, $this->serviceName, 'reports', json_decode('{"methods": {"generate": {"id": "adsense.reports.generate", "path": "reports", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "repeated": true, "location": "query"}, "currency": {"type": "string", "location": "query"}, "dimension": {"type": "string", "repeated": true, "location": "query"}, "endDate": {"type": "string", "required": true, "location": "query"}, "filter": {"type": "string", "repeated": true, "location": "query"}, "locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "50000", "location": "query"}, "metric": {"type": "string", "repeated": true, "location": "query"}, "sort": {"type": "string", "repeated": true, "location": "query"}, "startDate": {"type": "string", "required": true, "location": "query"}, "startIndex": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "5000", "location": "query"}}, "response": {"$ref": "AdsenseReportsGenerateResponse"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"], "supportsMediaDownload": true}}}', true));
    $this->reports_saved = new GFGS_Google_ReportsSavedServiceResource($this, $this->serviceName, 'saved', json_decode('{"methods": {"generate": {"id": "adsense.reports.saved.generate", "path": "reports/{savedReportId}", "httpMethod": "GET", "parameters": {"locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "50000", "location": "query"}, "savedReportId": {"type": "string", "required": true, "location": "path"}, "startIndex": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "5000", "location": "query"}}, "response": {"$ref": "AdsenseReportsGenerateResponse"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}, "list": {"id": "adsense.reports.saved.list", "path": "reports/saved", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "SavedReports"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
    $this->savedadstyles = new GFGS_Google_SavedadstylesServiceResource($this, $this->serviceName, 'savedadstyles', json_decode('{"methods": {"get": {"id": "adsense.savedadstyles.get", "path": "savedadstyles/{savedAdStyleId}", "httpMethod": "GET", "parameters": {"savedAdStyleId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "SavedAdStyle"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}, "list": {"id": "adsense.savedadstyles.list", "path": "savedadstyles", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "SavedAdStyles"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));
    $this->urlchannels = new GFGS_Google_UrlchannelsServiceResource($this, $this->serviceName, 'urlchannels', json_decode('{"methods": {"list": {"id": "adsense.urlchannels.list", "path": "adclients/{adClientId}/urlchannels", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "UrlChannels"}, "scopes": ["https://www.googleapis.com/auth/adsense", "https://www.googleapis.com/auth/adsense.readonly"]}}}', true));

  }
}

class GFGS_Google_Account extends GFGS_Google_Model {
  public $id;
  public $kind;
  public $name;
  public $premium;
  protected $__subAccountsType = 'GFGS_Google_Account';
  protected $__subAccountsDataType = 'array';
  public $subAccounts;
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
  public function setPremium($premium) {
    $this->premium = $premium;
  }
  public function getPremium() {
    return $this->premium;
  }
  public function setSubAccounts(/* array(GFGS_Google_Account) */ $subAccounts) {
    $this->assertIsArray($subAccounts, 'GFGS_Google_Account', __METHOD__);
    $this->subAccounts = $subAccounts;
  }
  public function getSubAccounts() {
    return $this->subAccounts;
  }
}

class GFGS_Google_Accounts extends GFGS_Google_Model {
  public $etag;
  protected $__itemsType = 'GFGS_Google_Account';
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
  public function setItems(/* array(GFGS_Google_Account) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_Account', __METHOD__);
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

class GFGS_Google_AdStyle extends GFGS_Google_Model {
  protected $__colorsType = 'GFGS_Google_AdStyleColors';
  protected $__colorsDataType = '';
  public $colors;
  public $corners;
  protected $__fontType = 'GFGS_Google_AdStyleFont';
  protected $__fontDataType = '';
  public $font;
  public $kind;
  public function setColors(GFGS_Google_AdStyleColors $colors) {
    $this->colors = $colors;
  }
  public function getColors() {
    return $this->colors;
  }
  public function setCorners($corners) {
    $this->corners = $corners;
  }
  public function getCorners() {
    return $this->corners;
  }
  public function setFont(GFGS_Google_AdStyleFont $font) {
    $this->font = $font;
  }
  public function getFont() {
    return $this->font;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class GFGS_Google_AdStyleColors extends GFGS_Google_Model {
  public $background;
  public $border;
  public $text;
  public $title;
  public $url;
  public function setBackground($background) {
    $this->background = $background;
  }
  public function getBackground() {
    return $this->background;
  }
  public function setBorder($border) {
    $this->border = $border;
  }
  public function getBorder() {
    return $this->border;
  }
  public function setText($text) {
    $this->text = $text;
  }
  public function getText() {
    return $this->text;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
  public function setUrl($url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
}

class GFGS_Google_AdStyleFont extends GFGS_Google_Model {
  public $family;
  public $size;
  public function setFamily($family) {
    $this->family = $family;
  }
  public function getFamily() {
    return $this->family;
  }
  public function setSize($size) {
    $this->size = $size;
  }
  public function getSize() {
    return $this->size;
  }
}

class GFGS_Google_AdUnit extends GFGS_Google_Model {
  public $code;
  protected $__contentAdsSettingsType = 'GFGS_Google_AdUnitContentAdsSettings';
  protected $__contentAdsSettingsDataType = '';
  public $contentAdsSettings;
  protected $__customStyleType = 'GFGS_Google_AdStyle';
  protected $__customStyleDataType = '';
  public $customStyle;
  protected $__feedAdsSettingsType = 'GFGS_Google_AdUnitFeedAdsSettings';
  protected $__feedAdsSettingsDataType = '';
  public $feedAdsSettings;
  public $id;
  public $kind;
  protected $__mobileContentAdsSettingsType = 'GFGS_Google_AdUnitMobileContentAdsSettings';
  protected $__mobileContentAdsSettingsDataType = '';
  public $mobileContentAdsSettings;
  public $name;
  public $savedStyleId;
  public $status;
  public function setCode($code) {
    $this->code = $code;
  }
  public function getCode() {
    return $this->code;
  }
  public function setContentAdsSettings(GFGS_Google_AdUnitContentAdsSettings $contentAdsSettings) {
    $this->contentAdsSettings = $contentAdsSettings;
  }
  public function getContentAdsSettings() {
    return $this->contentAdsSettings;
  }
  public function setCustomStyle(GFGS_Google_AdStyle $customStyle) {
    $this->customStyle = $customStyle;
  }
  public function getCustomStyle() {
    return $this->customStyle;
  }
  public function setFeedAdsSettings(GFGS_Google_AdUnitFeedAdsSettings $feedAdsSettings) {
    $this->feedAdsSettings = $feedAdsSettings;
  }
  public function getFeedAdsSettings() {
    return $this->feedAdsSettings;
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
  public function setMobileContentAdsSettings(GFGS_Google_AdUnitMobileContentAdsSettings $mobileContentAdsSettings) {
    $this->mobileContentAdsSettings = $mobileContentAdsSettings;
  }
  public function getMobileContentAdsSettings() {
    return $this->mobileContentAdsSettings;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setSavedStyleId($savedStyleId) {
    $this->savedStyleId = $savedStyleId;
  }
  public function getSavedStyleId() {
    return $this->savedStyleId;
  }
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
}

class GFGS_Google_AdUnitContentAdsSettings extends GFGS_Google_Model {
  protected $__backupOptionType = 'GFGS_Google_AdUnitContentAdsSettingsBackupOption';
  protected $__backupOptionDataType = '';
  public $backupOption;
  public $size;
  public $type;
  public function setBackupOption(GFGS_Google_AdUnitContentAdsSettingsBackupOption $backupOption) {
    $this->backupOption = $backupOption;
  }
  public function getBackupOption() {
    return $this->backupOption;
  }
  public function setSize($size) {
    $this->size = $size;
  }
  public function getSize() {
    return $this->size;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class GFGS_Google_AdUnitContentAdsSettingsBackupOption extends GFGS_Google_Model {
  public $color;
  public $type;
  public $url;
  public function setColor($color) {
    $this->color = $color;
  }
  public function getColor() {
    return $this->color;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setUrl($url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
}

class GFGS_Google_AdUnitFeedAdsSettings extends GFGS_Google_Model {
  public $adPosition;
  public $frequency;
  public $minimumWordCount;
  public $type;
  public function setAdPosition($adPosition) {
    $this->adPosition = $adPosition;
  }
  public function getAdPosition() {
    return $this->adPosition;
  }
  public function setFrequency($frequency) {
    $this->frequency = $frequency;
  }
  public function getFrequency() {
    return $this->frequency;
  }
  public function setMinimumWordCount($minimumWordCount) {
    $this->minimumWordCount = $minimumWordCount;
  }
  public function getMinimumWordCount() {
    return $this->minimumWordCount;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class GFGS_Google_AdUnitMobileContentAdsSettings extends GFGS_Google_Model {
  public $markupLanguage;
  public $scriptingLanguage;
  public $size;
  public $type;
  public function setMarkupLanguage($markupLanguage) {
    $this->markupLanguage = $markupLanguage;
  }
  public function getMarkupLanguage() {
    return $this->markupLanguage;
  }
  public function setScriptingLanguage($scriptingLanguage) {
    $this->scriptingLanguage = $scriptingLanguage;
  }
  public function getScriptingLanguage() {
    return $this->scriptingLanguage;
  }
  public function setSize($size) {
    $this->size = $size;
  }
  public function getSize() {
    return $this->size;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
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

class GFGS_Google_AdsenseReportsGenerateResponse extends GFGS_Google_Model {
  public $averages;
  protected $__headersType = 'GFGS_Google_AdsenseReportsGenerateResponseHeaders';
  protected $__headersDataType = 'array';
  public $headers;
  public $kind;
  public $rows;
  public $totalMatchedRows;
  public $totals;
  public $warnings;
  public function setAverages($averages) {
    $this->averages = $averages;
  }
  public function getAverages() {
    return $this->averages;
  }
  public function setHeaders(/* array(GFGS_Google_AdsenseReportsGenerateResponseHeaders) */ $headers) {
    $this->assertIsArray($headers, 'GFGS_Google_AdsenseReportsGenerateResponseHeaders', __METHOD__);
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
  public function setRows($rows) {
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
  public function setTotals($totals) {
    $this->totals = $totals;
  }
  public function getTotals() {
    return $this->totals;
  }
  public function setWarnings($warnings) {
    $this->warnings = $warnings;
  }
  public function getWarnings() {
    return $this->warnings;
  }
}

class GFGS_Google_AdsenseReportsGenerateResponseHeaders extends GFGS_Google_Model {
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

class GFGS_Google_SavedAdStyle extends GFGS_Google_Model {
  protected $__adStyleType = 'GFGS_Google_AdStyle';
  protected $__adStyleDataType = '';
  public $adStyle;
  public $id;
  public $kind;
  public $name;
  public function setAdStyle(GFGS_Google_AdStyle $adStyle) {
    $this->adStyle = $adStyle;
  }
  public function getAdStyle() {
    return $this->adStyle;
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
}

class GFGS_Google_SavedAdStyles extends GFGS_Google_Model {
  public $etag;
  protected $__itemsType = 'GFGS_Google_SavedAdStyle';
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
  public function setItems(/* array(GFGS_Google_SavedAdStyle) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_SavedAdStyle', __METHOD__);
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
