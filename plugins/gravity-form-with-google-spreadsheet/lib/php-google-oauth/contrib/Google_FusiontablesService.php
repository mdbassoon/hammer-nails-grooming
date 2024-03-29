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
   * The "column" collection of methods.
   * Typical usage is:
   *  <code>
   *   $fusiontablesService = new GFGS_Google_FusiontablesService(...);
   *   $column = $fusiontablesService->column;
   *  </code>
   */
  class GFGS_Google_ColumnServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Adds a new column to the table. (column.insert)
     *
     * @param string $tableId Table for which a new column is being added.
     * @param GFGS_Google_Column $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Column
     */
    public function insert($tableId, GFGS_Google_Column $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Column($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a specific column by its id. (column.get)
     *
     * @param string $tableId Table to which the column belongs.
     * @param string $columnId Name or identifier for the column that is being requested.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Column
     */
    public function get($tableId, $columnId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'columnId' => $columnId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Column($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of columns. (column.list)
     *
     * @param string $tableId Table whose columns are being listed.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken Continuation token specifying which result page to return. Optional.
     * @opt_param string maxResults Maximum number of columns to return. Optional. Default is 5.
     * @return GFGS_Google_ColumnList
     */
    public function listColumn($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_ColumnList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the name or type of an existing column. (column.update)
     *
     * @param string $tableId Table for which the column is being updated.
     * @param string $columnId Name or identifier for the column that is being updated.
     * @param GFGS_Google_Column $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Column
     */
    public function update($tableId, $columnId, GFGS_Google_Column $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'columnId' => $columnId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Column($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the name or type of an existing column. This method supports patch semantics.
     * (column.patch)
     *
     * @param string $tableId Table for which the column is being updated.
     * @param string $columnId Name or identifier for the column that is being updated.
     * @param GFGS_Google_Column $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Column
     */
    public function patch($tableId, $columnId, GFGS_Google_Column $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'columnId' => $columnId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Column($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes the column. (column.delete)
     *
     * @param string $tableId Table from which the column is being deleted.
     * @param string $columnId Name or identifier for the column being deleted.
     * @param array $optParams Optional parameters.
     */
    public function delete($tableId, $columnId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'columnId' => $columnId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "query" collection of methods.
   * Typical usage is:
   *  <code>
   *   $fusiontablesService = new GFGS_Google_FusiontablesService(...);
   *   $query = $fusiontablesService->query;
   *  </code>
   */
  class GFGS_Google_QueryServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Executes an SQL SELECT/SHOW/DESCRIBE statement. (query.sqlGet)
     *
     * @param string $sql An SQL SELECT/SHOW/DESCRIBE statement.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool typed Should typed values be returned in the (JSON) response -- numbers for numeric values and parsed geometries for KML values? Default is true.
     * @opt_param bool hdrs Should column names be included (in the first row)?. Default is true.
     * @return GFGS_Google_Sqlresponse
     */
    public function sqlGet($sql, $optParams = array()) {
      $params = array('sql' => $sql);
      $params = array_merge($params, $optParams);
      $data = $this->__call('sqlGet', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Sqlresponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Executes an SQL SELECT/INSERT/UPDATE/DELETE/SHOW/DESCRIBE statement. (query.sql)
     *
     * @param string $sql An SQL SELECT/SHOW/DESCRIBE/INSERT/UPDATE/DELETE statement.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool typed Should typed values be returned in the (JSON) response -- numbers for numeric values and parsed geometries for KML values? Default is true.
     * @opt_param bool hdrs Should column names be included (in the first row)?. Default is true.
     * @return GFGS_Google_Sqlresponse
     */
    public function sql($sql, $optParams = array()) {
      $params = array('sql' => $sql);
      $params = array_merge($params, $optParams);
      $data = $this->__call('sql', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Sqlresponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "style" collection of methods.
   * Typical usage is:
   *  <code>
   *   $fusiontablesService = new GFGS_Google_FusiontablesService(...);
   *   $style = $fusiontablesService->style;
   *  </code>
   */
  class GFGS_Google_StyleServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Adds a new style for the table. (style.insert)
     *
     * @param string $tableId Table for which a new style is being added
     * @param GFGS_Google_StyleSetting $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_StyleSetting
     */
    public function insert($tableId, GFGS_Google_StyleSetting $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_StyleSetting($data);
      } else {
        return $data;
      }
    }
    /**
     * Gets a specific style. (style.get)
     *
     * @param string $tableId Table to which the requested style belongs
     * @param int $styleId Identifier (integer) for a specific style in a table
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_StyleSetting
     */
    public function get($tableId, $styleId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'styleId' => $styleId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_StyleSetting($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of styles. (style.list)
     *
     * @param string $tableId Table whose styles are being listed
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken Continuation token specifying which result page to return. Optional.
     * @opt_param string maxResults Maximum number of styles to return. Optional. Default is 5.
     * @return GFGS_Google_StyleSettingList
     */
    public function listStyle($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_StyleSettingList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing style. (style.update)
     *
     * @param string $tableId Table whose style is being updated.
     * @param int $styleId Identifier (within a table) for the style being updated.
     * @param GFGS_Google_StyleSetting $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_StyleSetting
     */
    public function update($tableId, $styleId, GFGS_Google_StyleSetting $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'styleId' => $styleId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_StyleSetting($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing style. This method supports patch semantics. (style.patch)
     *
     * @param string $tableId Table whose style is being updated.
     * @param int $styleId Identifier (within a table) for the style being updated.
     * @param GFGS_Google_StyleSetting $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_StyleSetting
     */
    public function patch($tableId, $styleId, GFGS_Google_StyleSetting $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'styleId' => $styleId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_StyleSetting($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes a style. (style.delete)
     *
     * @param string $tableId Table from which the style is being deleted
     * @param int $styleId Identifier (within a table) for the style being deleted
     * @param array $optParams Optional parameters.
     */
    public function delete($tableId, $styleId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'styleId' => $styleId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "template" collection of methods.
   * Typical usage is:
   *  <code>
   *   $fusiontablesService = new GFGS_Google_FusiontablesService(...);
   *   $template = $fusiontablesService->template;
   *  </code>
   */
  class GFGS_Google_TemplateServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Creates a new template for the table. (template.insert)
     *
     * @param string $tableId Table for which a new template is being created
     * @param GFGS_Google_Template $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Template
     */
    public function insert($tableId, GFGS_Google_Template $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Template($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a specific template by its id (template.get)
     *
     * @param string $tableId Table to which the template belongs
     * @param int $templateId Identifier for the template that is being requested
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Template
     */
    public function get($tableId, $templateId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'templateId' => $templateId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Template($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of templates. (template.list)
     *
     * @param string $tableId Identifier for the table whose templates are being requested
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken Continuation token specifying which results page to return. Optional.
     * @opt_param string maxResults Maximum number of templates to return. Optional. Default is 5.
     * @return GFGS_Google_TemplateList
     */
    public function listTemplate($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_TemplateList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing template (template.update)
     *
     * @param string $tableId Table to which the updated template belongs
     * @param int $templateId Identifier for the template that is being updated
     * @param GFGS_Google_Template $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Template
     */
    public function update($tableId, $templateId, GFGS_Google_Template $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'templateId' => $templateId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Template($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing template. This method supports patch semantics. (template.patch)
     *
     * @param string $tableId Table to which the updated template belongs
     * @param int $templateId Identifier for the template that is being updated
     * @param GFGS_Google_Template $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Template
     */
    public function patch($tableId, $templateId, GFGS_Google_Template $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'templateId' => $templateId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Template($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes a template (template.delete)
     *
     * @param string $tableId Table from which the template is being deleted
     * @param int $templateId Identifier for the template which is being deleted
     * @param array $optParams Optional parameters.
     */
    public function delete($tableId, $templateId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'templateId' => $templateId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "table" collection of methods.
   * Typical usage is:
   *  <code>
   *   $fusiontablesService = new GFGS_Google_FusiontablesService(...);
   *   $table = $fusiontablesService->table;
   *  </code>
   */
  class GFGS_Google_TableServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Creates a new table. (table.insert)
     *
     * @param GFGS_Google_Table $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Table
     */
    public function insert(GFGS_Google_Table $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Table($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a specific table by its id. (table.get)
     *
     * @param string $tableId Identifier(ID) for the table being requested.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Table
     */
    public function get($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Table($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of tables a user owns. (table.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken Continuation token specifying which result page to return. Optional.
     * @opt_param string maxResults Maximum number of styles to return. Optional. Default is 5.
     * @return GFGS_Google_TableList
     */
    public function listTable($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_TableList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing table. Unless explicitly requested, only the name, description, and
     * attribution will be updated. (table.update)
     *
     * @param string $tableId Id of the table that is being updated.
     * @param GFGS_Google_Table $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool replaceViewDefinition Should the view definition also be updated? The specified view definition replaces the existing one. Only a view can be updated with a new definition.
     * @return GFGS_Google_Table
     */
    public function update($tableId, GFGS_Google_Table $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Table($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing table. Unless explicitly requested, only the name, description, and
     * attribution will be updated. This method supports patch semantics. (table.patch)
     *
     * @param string $tableId Id of the table that is being updated.
     * @param GFGS_Google_Table $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool replaceViewDefinition Should the view definition also be updated? The specified view definition replaces the existing one. Only a view can be updated with a new definition.
     * @return GFGS_Google_Table
     */
    public function patch($tableId, GFGS_Google_Table $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Table($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes a table. (table.delete)
     *
     * @param string $tableId Id of the table that is being deleted.
     * @param array $optParams Optional parameters.
     */
    public function delete($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

/**
 * Service definition for Google_Fusiontables (v1).
 *
 * <p>
 * API for working with Fusion Tables data.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/fusiontables" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class GFGS_Google_FusiontablesService extends GFGS_Google_Service {
  public $column;
  public $query;
  public $style;
  public $template;
  public $table;
  /**
   * Constructs the internal representation of the Fusiontables service.
   *
   * @param GFGSC_Google_Client_Connector $client
   */
  public function __construct(GFGSC_Google_Client_Connector $client) {
    $this->servicePath = 'fusiontables/v1/';
    $this->version = 'v1';
    $this->serviceName = 'fusiontables';

    $client->addService($this->serviceName, $this->version);
    $this->column = new GFGS_Google_ColumnServiceResource($this, $this->serviceName, 'column', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Column"}, "response": {"$ref": "Column"}, "httpMethod": "POST", "path": "tables/{tableId}/columns", "id": "fusiontables.column.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "columnId": {"required": true, "type": "string", "location": "path"}}, "id": "fusiontables.column.get", "httpMethod": "GET", "path": "tables/{tableId}/columns/{columnId}", "response": {"$ref": "Column"}}, "list": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "tableId": {"required": true, "type": "string", "location": "path"}, "maxResults": {"minimum": "0", "type": "integer", "location": "query", "format": "uint32"}}, "id": "fusiontables.column.list", "httpMethod": "GET", "path": "tables/{tableId}/columns", "response": {"$ref": "ColumnList"}}, "update": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "columnId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Column"}, "response": {"$ref": "Column"}, "httpMethod": "PUT", "path": "tables/{tableId}/columns/{columnId}", "id": "fusiontables.column.update"}, "patch": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "columnId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Column"}, "response": {"$ref": "Column"}, "httpMethod": "PATCH", "path": "tables/{tableId}/columns/{columnId}", "id": "fusiontables.column.patch"}, "delete": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "path": "tables/{tableId}/columns/{columnId}", "id": "fusiontables.column.delete", "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "columnId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE"}}}', true));
    $this->query = new GFGS_Google_QueryServiceResource($this, $this->serviceName, 'query', json_decode('{"methods": {"sqlGet": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"typed": {"type": "boolean", "location": "query"}, "hdrs": {"type": "boolean", "location": "query"}, "sql": {"required": true, "type": "string", "location": "query"}}, "id": "fusiontables.query.sqlGet", "httpMethod": "GET", "path": "query", "response": {"$ref": "Sqlresponse"}}, "sql": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"typed": {"type": "boolean", "location": "query"}, "hdrs": {"type": "boolean", "location": "query"}, "sql": {"required": true, "type": "string", "location": "query"}}, "id": "fusiontables.query.sql", "httpMethod": "POST", "path": "query", "response": {"$ref": "Sqlresponse"}}}}', true));
    $this->style = new GFGS_Google_StyleServiceResource($this, $this->serviceName, 'style', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "StyleSetting"}, "response": {"$ref": "StyleSetting"}, "httpMethod": "POST", "path": "tables/{tableId}/styles", "id": "fusiontables.style.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "styleId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "id": "fusiontables.style.get", "httpMethod": "GET", "path": "tables/{tableId}/styles/{styleId}", "response": {"$ref": "StyleSetting"}}, "list": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "tableId": {"required": true, "type": "string", "location": "path"}, "maxResults": {"minimum": "0", "type": "integer", "location": "query", "format": "uint32"}}, "id": "fusiontables.style.list", "httpMethod": "GET", "path": "tables/{tableId}/styles", "response": {"$ref": "StyleSettingList"}}, "update": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "styleId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "request": {"$ref": "StyleSetting"}, "response": {"$ref": "StyleSetting"}, "httpMethod": "PUT", "path": "tables/{tableId}/styles/{styleId}", "id": "fusiontables.style.update"}, "patch": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "styleId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "request": {"$ref": "StyleSetting"}, "response": {"$ref": "StyleSetting"}, "httpMethod": "PATCH", "path": "tables/{tableId}/styles/{styleId}", "id": "fusiontables.style.patch"}, "delete": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "path": "tables/{tableId}/styles/{styleId}", "id": "fusiontables.style.delete", "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "styleId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "httpMethod": "DELETE"}}}', true));
    $this->template = new GFGS_Google_TemplateServiceResource($this, $this->serviceName, 'template', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Template"}, "response": {"$ref": "Template"}, "httpMethod": "POST", "path": "tables/{tableId}/templates", "id": "fusiontables.template.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "templateId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "id": "fusiontables.template.get", "httpMethod": "GET", "path": "tables/{tableId}/templates/{templateId}", "response": {"$ref": "Template"}}, "list": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "tableId": {"required": true, "type": "string", "location": "path"}, "maxResults": {"minimum": "0", "type": "integer", "location": "query", "format": "uint32"}}, "id": "fusiontables.template.list", "httpMethod": "GET", "path": "tables/{tableId}/templates", "response": {"$ref": "TemplateList"}}, "update": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "templateId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "request": {"$ref": "Template"}, "response": {"$ref": "Template"}, "httpMethod": "PUT", "path": "tables/{tableId}/templates/{templateId}", "id": "fusiontables.template.update"}, "patch": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "templateId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "request": {"$ref": "Template"}, "response": {"$ref": "Template"}, "httpMethod": "PATCH", "path": "tables/{tableId}/templates/{templateId}", "id": "fusiontables.template.patch"}, "delete": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "path": "tables/{tableId}/templates/{templateId}", "id": "fusiontables.template.delete", "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}, "templateId": {"required": true, "type": "integer", "location": "path", "format": "int32"}}, "httpMethod": "DELETE"}}}', true));
    $this->table = new GFGS_Google_TableServiceResource($this, $this->serviceName, 'table', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "request": {"$ref": "Table"}, "response": {"$ref": "Table"}, "httpMethod": "POST", "path": "tables", "id": "fusiontables.table.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}}, "id": "fusiontables.table.get", "httpMethod": "GET", "path": "tables/{tableId}", "response": {"$ref": "Table"}}, "list": {"scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"], "parameters": {"pageToken": {"type": "string", "location": "query"}, "maxResults": {"minimum": "0", "type": "integer", "location": "query", "format": "uint32"}}, "response": {"$ref": "TableList"}, "httpMethod": "GET", "path": "tables", "id": "fusiontables.table.list"}, "update": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"replaceViewDefinition": {"type": "boolean", "location": "query"}, "tableId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Table"}, "response": {"$ref": "Table"}, "httpMethod": "PUT", "path": "tables/{tableId}", "id": "fusiontables.table.update"}, "patch": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "parameters": {"replaceViewDefinition": {"type": "boolean", "location": "query"}, "tableId": {"required": true, "type": "string", "location": "path"}}, "request": {"$ref": "Table"}, "response": {"$ref": "Table"}, "httpMethod": "PATCH", "path": "tables/{tableId}", "id": "fusiontables.table.patch"}, "delete": {"scopes": ["https://www.googleapis.com/auth/fusiontables"], "path": "tables/{tableId}", "id": "fusiontables.table.delete", "parameters": {"tableId": {"required": true, "type": "string", "location": "path"}}, "httpMethod": "DELETE"}}}', true));

  }
}

class GFGS_Google_Bucket extends GFGS_Google_Model {
  public $opacity;
  public $weight;
  public $min;
  public $color;
  public $max;
  public $icon;
  public function setOpacity($opacity) {
    $this->opacity = $opacity;
  }
  public function getOpacity() {
    return $this->opacity;
  }
  public function setWeight($weight) {
    $this->weight = $weight;
  }
  public function getWeight() {
    return $this->weight;
  }
  public function setMin($min) {
    $this->min = $min;
  }
  public function getMin() {
    return $this->min;
  }
  public function setColor($color) {
    $this->color = $color;
  }
  public function getColor() {
    return $this->color;
  }
  public function setMax($max) {
    $this->max = $max;
  }
  public function getMax() {
    return $this->max;
  }
  public function setIcon($icon) {
    $this->icon = $icon;
  }
  public function getIcon() {
    return $this->icon;
  }
}

class GFGS_Google_Column extends GFGS_Google_Model {
  public $kind;
  public $type;
  public $columnId;
  public $name;
  protected $__baseColumnType = 'GFGS_Google_ColumnBaseColumn';
  protected $__baseColumnDataType = '';
  public $baseColumn;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setColumnId($columnId) {
    $this->columnId = $columnId;
  }
  public function getColumnId() {
    return $this->columnId;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setBaseColumn(GFGS_Google_ColumnBaseColumn $baseColumn) {
    $this->baseColumn = $baseColumn;
  }
  public function getBaseColumn() {
    return $this->baseColumn;
  }
}

class GFGS_Google_ColumnBaseColumn extends GFGS_Google_Model {
  public $tableIndex;
  public $columnId;
  public function setTableIndex($tableIndex) {
    $this->tableIndex = $tableIndex;
  }
  public function getTableIndex() {
    return $this->tableIndex;
  }
  public function setColumnId($columnId) {
    $this->columnId = $columnId;
  }
  public function getColumnId() {
    return $this->columnId;
  }
}

class GFGS_Google_ColumnList extends GFGS_Google_Model {
  public $nextPageToken;
  protected $__itemsType = 'GFGS_Google_Column';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $totalItems;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(GFGS_Google_Column) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_Column', __METHOD__);
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
  public function setTotalItems($totalItems) {
    $this->totalItems = $totalItems;
  }
  public function getTotalItems() {
    return $this->totalItems;
  }
}

class GFGS_Google_Geometry extends GFGS_Google_Model {
  public $geometry;
  public $type;
  public $geometries;
  public function setGeometry($geometry) {
    $this->geometry = $geometry;
  }
  public function getGeometry() {
    return $this->geometry;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setGeometries(/* array(Google_object) */ $geometries) {
    $this->assertIsArray($geometries, 'Google_object', __METHOD__);
    $this->geometries = $geometries;
  }
  public function getGeometries() {
    return $this->geometries;
  }
}

class GFGS_Google_Line extends GFGS_Google_Model {
  public $type;
  public $coordinates;
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setCoordinates(/* array(Google_double) */ $coordinates) {
    $this->assertIsArray($coordinates, 'Google_double', __METHOD__);
    $this->coordinates = $coordinates;
  }
  public function getCoordinates() {
    return $this->coordinates;
  }
}

class GFGS_Google_LineStyle extends GFGS_Google_Model {
  public $strokeWeight;
  protected $__strokeWeightStylerType = 'GFGS_Google_StyleFunction';
  protected $__strokeWeightStylerDataType = '';
  public $strokeWeightStyler;
  public $strokeColor;
  public $strokeOpacity;
  protected $__strokeColorStylerType = 'GFGS_Google_StyleFunction';
  protected $__strokeColorStylerDataType = '';
  public $strokeColorStyler;
  public function setStrokeWeight($strokeWeight) {
    $this->strokeWeight = $strokeWeight;
  }
  public function getStrokeWeight() {
    return $this->strokeWeight;
  }
  public function setStrokeWeightStyler(GFGS_Google_StyleFunction $strokeWeightStyler) {
    $this->strokeWeightStyler = $strokeWeightStyler;
  }
  public function getStrokeWeightStyler() {
    return $this->strokeWeightStyler;
  }
  public function setStrokeColor($strokeColor) {
    $this->strokeColor = $strokeColor;
  }
  public function getStrokeColor() {
    return $this->strokeColor;
  }
  public function setStrokeOpacity($strokeOpacity) {
    $this->strokeOpacity = $strokeOpacity;
  }
  public function getStrokeOpacity() {
    return $this->strokeOpacity;
  }
  public function setStrokeColorStyler(GFGS_Google_StyleFunction $strokeColorStyler) {
    $this->strokeColorStyler = $strokeColorStyler;
  }
  public function getStrokeColorStyler() {
    return $this->strokeColorStyler;
  }
}

class GFGS_Google_Point extends GFGS_Google_Model {
  public $type;
  public $coordinates;
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setCoordinates(/* array(Google_double) */ $coordinates) {
    $this->assertIsArray($coordinates, 'Google_double', __METHOD__);
    $this->coordinates = $coordinates;
  }
  public function getCoordinates() {
    return $this->coordinates;
  }
}

class GFGS_Google_PointStyle extends GFGS_Google_Model {
  protected $__iconStylerType = 'GFGS_Google_StyleFunction';
  protected $__iconStylerDataType = '';
  public $iconStyler;
  public $iconName;
  public function setIconStyler(GFGS_Google_StyleFunction $iconStyler) {
    $this->iconStyler = $iconStyler;
  }
  public function getIconStyler() {
    return $this->iconStyler;
  }
  public function setIconName($iconName) {
    $this->iconName = $iconName;
  }
  public function getIconName() {
    return $this->iconName;
  }
}

class GFGS_Google_Polygon extends GFGS_Google_Model {
  public $type;
  public $coordinates;
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setCoordinates(/* array(Google_double) */ $coordinates) {
    $this->assertIsArray($coordinates, 'Google_double', __METHOD__);
    $this->coordinates = $coordinates;
  }
  public function getCoordinates() {
    return $this->coordinates;
  }
}

class GFGS_Google_PolygonStyle extends GFGS_Google_Model {
  protected $__strokeColorStylerType = 'GFGS_Google_StyleFunction';
  protected $__strokeColorStylerDataType = '';
  public $strokeColorStyler;
  public $strokeWeight;
  public $strokeOpacity;
  protected $__strokeWeightStylerType = 'GFGS_Google_StyleFunction';
  protected $__strokeWeightStylerDataType = '';
  public $strokeWeightStyler;
  protected $__fillColorStylerType = 'GFGS_Google_StyleFunction';
  protected $__fillColorStylerDataType = '';
  public $fillColorStyler;
  public $fillColor;
  public $strokeColor;
  public $fillOpacity;
  public function setStrokeColorStyler(GFGS_Google_StyleFunction $strokeColorStyler) {
    $this->strokeColorStyler = $strokeColorStyler;
  }
  public function getStrokeColorStyler() {
    return $this->strokeColorStyler;
  }
  public function setStrokeWeight($strokeWeight) {
    $this->strokeWeight = $strokeWeight;
  }
  public function getStrokeWeight() {
    return $this->strokeWeight;
  }
  public function setStrokeOpacity($strokeOpacity) {
    $this->strokeOpacity = $strokeOpacity;
  }
  public function getStrokeOpacity() {
    return $this->strokeOpacity;
  }
  public function setStrokeWeightStyler(GFGS_Google_StyleFunction $strokeWeightStyler) {
    $this->strokeWeightStyler = $strokeWeightStyler;
  }
  public function getStrokeWeightStyler() {
    return $this->strokeWeightStyler;
  }
  public function setFillColorStyler(GFGS_Google_StyleFunction $fillColorStyler) {
    $this->fillColorStyler = $fillColorStyler;
  }
  public function getFillColorStyler() {
    return $this->fillColorStyler;
  }
  public function setFillColor($fillColor) {
    $this->fillColor = $fillColor;
  }
  public function getFillColor() {
    return $this->fillColor;
  }
  public function setStrokeColor($strokeColor) {
    $this->strokeColor = $strokeColor;
  }
  public function getStrokeColor() {
    return $this->strokeColor;
  }
  public function setFillOpacity($fillOpacity) {
    $this->fillOpacity = $fillOpacity;
  }
  public function getFillOpacity() {
    return $this->fillOpacity;
  }
}

class GFGS_Google_Sqlresponse extends GFGS_Google_Model {
  public $kind;
  public $rows;
  public $columns;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setRows(/* array(Google_object) */ $rows) {
    $this->assertIsArray($rows, 'Google_object', __METHOD__);
    $this->rows = $rows;
  }
  public function getRows() {
    return $this->rows;
  }
  public function setColumns(/* array(Google_string) */ $columns) {
    $this->assertIsArray($columns, 'Google_string', __METHOD__);
    $this->columns = $columns;
  }
  public function getColumns() {
    return $this->columns;
  }
}

class GFGS_Google_StyleFunction extends GFGS_Google_Model {
  protected $__gradientType = 'GFGS_Google_StyleFunctionGradient';
  protected $__gradientDataType = '';
  public $gradient;
  public $columnName;
  protected $__bucketsType = 'GFGS_Google_Bucket';
  protected $__bucketsDataType = 'array';
  public $buckets;
  public $kind;
  public function setGradient(GFGS_Google_StyleFunctionGradient $gradient) {
    $this->gradient = $gradient;
  }
  public function getGradient() {
    return $this->gradient;
  }
  public function setColumnName($columnName) {
    $this->columnName = $columnName;
  }
  public function getColumnName() {
    return $this->columnName;
  }
  public function setBuckets(/* array(GFGS_Google_Bucket) */ $buckets) {
    $this->assertIsArray($buckets, 'GFGS_Google_Bucket', __METHOD__);
    $this->buckets = $buckets;
  }
  public function getBuckets() {
    return $this->buckets;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class GFGS_Google_StyleFunctionGradient extends GFGS_Google_Model {
  public $max;
  protected $__colorsType = 'GFGS_Google_StyleFunctionGradientColors';
  protected $__colorsDataType = 'array';
  public $colors;
  public $min;
  public function setMax($max) {
    $this->max = $max;
  }
  public function getMax() {
    return $this->max;
  }
  public function setColors(/* array(GFGS_Google_StyleFunctionGradientColors) */ $colors) {
    $this->assertIsArray($colors, 'GFGS_Google_StyleFunctionGradientColors', __METHOD__);
    $this->colors = $colors;
  }
  public function getColors() {
    return $this->colors;
  }
  public function setMin($min) {
    $this->min = $min;
  }
  public function getMin() {
    return $this->min;
  }
}

class GFGS_Google_StyleFunctionGradientColors extends GFGS_Google_Model {
  public $color;
  public $opacity;
  public function setColor($color) {
    $this->color = $color;
  }
  public function getColor() {
    return $this->color;
  }
  public function setOpacity($opacity) {
    $this->opacity = $opacity;
  }
  public function getOpacity() {
    return $this->opacity;
  }
}

class GFGS_Google_StyleSetting extends GFGS_Google_Model {
  protected $__markerOptionsType = 'GFGS_Google_PointStyle';
  protected $__markerOptionsDataType = '';
  public $markerOptions;
  public $kind;
  public $name;
  protected $__polygonOptionsType = 'GFGS_Google_PolygonStyle';
  protected $__polygonOptionsDataType = '';
  public $polygonOptions;
  public $isDefaultForTable;
  protected $__polylineOptionsType = 'GFGS_Google_LineStyle';
  protected $__polylineOptionsDataType = '';
  public $polylineOptions;
  public $tableId;
  public $styleId;
  public function setMarkerOptions(GFGS_Google_PointStyle $markerOptions) {
    $this->markerOptions = $markerOptions;
  }
  public function getMarkerOptions() {
    return $this->markerOptions;
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
  public function setPolygonOptions(GFGS_Google_PolygonStyle $polygonOptions) {
    $this->polygonOptions = $polygonOptions;
  }
  public function getPolygonOptions() {
    return $this->polygonOptions;
  }
  public function setIsDefaultForTable($isDefaultForTable) {
    $this->isDefaultForTable = $isDefaultForTable;
  }
  public function getIsDefaultForTable() {
    return $this->isDefaultForTable;
  }
  public function setPolylineOptions(GFGS_Google_LineStyle $polylineOptions) {
    $this->polylineOptions = $polylineOptions;
  }
  public function getPolylineOptions() {
    return $this->polylineOptions;
  }
  public function setTableId($tableId) {
    $this->tableId = $tableId;
  }
  public function getTableId() {
    return $this->tableId;
  }
  public function setStyleId($styleId) {
    $this->styleId = $styleId;
  }
  public function getStyleId() {
    return $this->styleId;
  }
}

class GFGS_Google_StyleSettingList extends GFGS_Google_Model {
  public $nextPageToken;
  protected $__itemsType = 'GFGS_Google_StyleSetting';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $totalItems;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(GFGS_Google_StyleSetting) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_StyleSetting', __METHOD__);
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
  public function setTotalItems($totalItems) {
    $this->totalItems = $totalItems;
  }
  public function getTotalItems() {
    return $this->totalItems;
  }
}

class GFGS_Google_Table extends GFGS_Google_Model {
  public $kind;
  public $attribution;
  public $description;
  public $isExportable;
  public $baseTableIds;
  public $attributionLink;
  public $sql;
  public $tableId;
  protected $__columnsType = 'GFGS_Google_Column';
  protected $__columnsDataType = 'array';
  public $columns;
  public $name;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setAttribution($attribution) {
    $this->attribution = $attribution;
  }
  public function getAttribution() {
    return $this->attribution;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setIsExportable($isExportable) {
    $this->isExportable = $isExportable;
  }
  public function getIsExportable() {
    return $this->isExportable;
  }
  public function setBaseTableIds(/* array(Google_string) */ $baseTableIds) {
    $this->assertIsArray($baseTableIds, 'Google_string', __METHOD__);
    $this->baseTableIds = $baseTableIds;
  }
  public function getBaseTableIds() {
    return $this->baseTableIds;
  }
  public function setAttributionLink($attributionLink) {
    $this->attributionLink = $attributionLink;
  }
  public function getAttributionLink() {
    return $this->attributionLink;
  }
  public function setSql($sql) {
    $this->sql = $sql;
  }
  public function getSql() {
    return $this->sql;
  }
  public function setTableId($tableId) {
    $this->tableId = $tableId;
  }
  public function getTableId() {
    return $this->tableId;
  }
  public function setColumns(/* array(GFGS_Google_Column) */ $columns) {
    $this->assertIsArray($columns, 'GFGS_Google_Column', __METHOD__);
    $this->columns = $columns;
  }
  public function getColumns() {
    return $this->columns;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class GFGS_Google_TableList extends GFGS_Google_Model {
  public $nextPageToken;
  protected $__itemsType = 'GFGS_Google_Table';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(GFGS_Google_Table) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_Table', __METHOD__);
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

class GFGS_Google_Template extends GFGS_Google_Model {
  public $body;
  public $kind;
  public $name;
  public $automaticColumnNames;
  public $isDefaultForTable;
  public $tableId;
  public $templateId;
  public function setBody($body) {
    $this->body = $body;
  }
  public function getBody() {
    return $this->body;
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
  public function setAutomaticColumnNames(/* array(Google_string) */ $automaticColumnNames) {
    $this->assertIsArray($automaticColumnNames, 'Google_string', __METHOD__);
    $this->automaticColumnNames = $automaticColumnNames;
  }
  public function getAutomaticColumnNames() {
    return $this->automaticColumnNames;
  }
  public function setIsDefaultForTable($isDefaultForTable) {
    $this->isDefaultForTable = $isDefaultForTable;
  }
  public function getIsDefaultForTable() {
    return $this->isDefaultForTable;
  }
  public function setTableId($tableId) {
    $this->tableId = $tableId;
  }
  public function getTableId() {
    return $this->tableId;
  }
  public function setTemplateId($templateId) {
    $this->templateId = $templateId;
  }
  public function getTemplateId() {
    return $this->templateId;
  }
}

class GFGS_Google_TemplateList extends GFGS_Google_Model {
  public $nextPageToken;
  protected $__itemsType = 'GFGS_Google_Template';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $totalItems;
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setItems(/* array(GFGS_Google_Template) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_Template', __METHOD__);
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
  public function setTotalItems($totalItems) {
    $this->totalItems = $totalItems;
  }
  public function getTotalItems() {
    return $this->totalItems;
  }
}
