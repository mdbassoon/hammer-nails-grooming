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
   * The "about" collection of methods.
   * Typical usage is:
   *  <code>
   *   $driveService = new GFGS_Google_DriveService(...);
   *   $about = $driveService->about;
   *  </code>
   */
  class GFGS_Google_AboutServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Gets the information about the current user along with Drive API settings (about.get)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeSubscribed When calculating the number of remaining change IDs, whether to include shared files and public files the user has opened. When set to false, this counts only change IDs for owned files and any shared or public files that the user has explictly added to a folder in Drive.
     * @opt_param string maxChangeIdCount Maximum number of remaining change IDs to count
     * @opt_param string startChangeId Change ID to start counting from when calculating number of remaining change IDs
     * @return GFGS_Google_About
     */
    public function get($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_About($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "apps" collection of methods.
   * Typical usage is:
   *  <code>
   *   $driveService = new GFGS_Google_DriveService(...);
   *   $apps = $driveService->apps;
   *  </code>
   */
  class GFGS_Google_AppsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Gets a specific app. (apps.get)
     *
     * @param string $appId The ID of the app.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_App
     */
    public function get($appId, $optParams = array()) {
      $params = array('appId' => $appId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_App($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists a user's apps. (apps.list)
     *
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_AppList
     */
    public function listApps($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_AppList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "changes" collection of methods.
   * Typical usage is:
   *  <code>
   *   $driveService = new GFGS_Google_DriveService(...);
   *   $changes = $driveService->changes;
   *  </code>
   */
  class GFGS_Google_ChangesServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Gets a specific change. (changes.get)
     *
     * @param string $changeId The ID of the change.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Change
     */
    public function get($changeId, $optParams = array()) {
      $params = array('changeId' => $changeId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Change($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists the changes for a user. (changes.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeDeleted Whether to include deleted items.
     * @opt_param bool includeSubscribed Whether to include shared files and public files the user has opened. When set to false, the list will include owned files plus any shared or public files the user has explictly added to a folder in Drive.
     * @opt_param int maxResults Maximum number of changes to return.
     * @opt_param string pageToken Page token for changes.
     * @opt_param string startChangeId Change ID to start listing changes from.
     * @return GFGS_Google_ChangeList
     */
    public function listChanges($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_ChangeList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "children" collection of methods.
   * Typical usage is:
   *  <code>
   *   $driveService = new GFGS_Google_DriveService(...);
   *   $children = $driveService->children;
   *  </code>
   */
  class GFGS_Google_ChildrenServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Removes a child from a folder. (children.delete)
     *
     * @param string $folderId The ID of the folder.
     * @param string $childId The ID of the child.
     * @param array $optParams Optional parameters.
     */
    public function delete($folderId, $childId, $optParams = array()) {
      $params = array('folderId' => $folderId, 'childId' => $childId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Gets a specific child reference. (children.get)
     *
     * @param string $folderId The ID of the folder.
     * @param string $childId The ID of the child.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_ChildReference
     */
    public function get($folderId, $childId, $optParams = array()) {
      $params = array('folderId' => $folderId, 'childId' => $childId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_ChildReference($data);
      } else {
        return $data;
      }
    }
    /**
     * Inserts a file into a folder. (children.insert)
     *
     * @param string $folderId The ID of the folder.
     * @param GFGS_Google_ChildReference $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_ChildReference
     */
    public function insert($folderId, GFGS_Google_ChildReference $postBody, $optParams = array()) {
      $params = array('folderId' => $folderId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_ChildReference($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists a folder's children. (children.list)
     *
     * @param string $folderId The ID of the folder.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults Maximum number of children to return.
     * @opt_param string pageToken Page token for children.
     * @opt_param string q Query string for searching children.
     * @return GFGS_Google_ChildList
     */
    public function listChildren($folderId, $optParams = array()) {
      $params = array('folderId' => $folderId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_ChildList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "comments" collection of methods.
   * Typical usage is:
   *  <code>
   *   $driveService = new GFGS_Google_DriveService(...);
   *   $comments = $driveService->comments;
   *  </code>
   */
  class GFGS_Google_CommentsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Deletes a comment. (comments.delete)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param array $optParams Optional parameters.
     */
    public function delete($fileId, $commentId, $optParams = array()) {
      $params = array('fileId' => $fileId, 'commentId' => $commentId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Gets a comment by ID. (comments.get)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeDeleted If set, this will succeed when retrieving a deleted comment, and will include any deleted replies.
     * @return GFGS_Google_Comment
     */
    public function get($fileId, $commentId, $optParams = array()) {
      $params = array('fileId' => $fileId, 'commentId' => $commentId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Comment($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a new comment on the given file. (comments.insert)
     *
     * @param string $fileId The ID of the file.
     * @param GFGS_Google_Comment $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Comment
     */
    public function insert($fileId, GFGS_Google_Comment $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Comment($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists a file's comments. (comments.list)
     *
     * @param string $fileId The ID of the file.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeDeleted If set, all comments and replies, including deleted comments and replies (with content stripped) will be returned.
     * @opt_param int maxResults The maximum number of discussions to include in the response, used for paging.
     * @opt_param string pageToken The continuation token, used to page through large result sets. To get the next page of results, set this parameter to the value of "nextPageToken" from the previous response.
     * @opt_param string updatedMin Only discussions that were updated after this timestamp will be returned. Formatted as an RFC 3339 timestamp.
     * @return GFGS_Google_CommentList
     */
    public function listComments($fileId, $optParams = array()) {
      $params = array('fileId' => $fileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_CommentList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing comment. This method supports patch semantics. (comments.patch)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param GFGS_Google_Comment $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Comment
     */
    public function patch($fileId, $commentId, GFGS_Google_Comment $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'commentId' => $commentId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Comment($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing comment. (comments.update)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param GFGS_Google_Comment $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Comment
     */
    public function update($fileId, $commentId, GFGS_Google_Comment $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'commentId' => $commentId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Comment($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "files" collection of methods.
   * Typical usage is:
   *  <code>
   *   $driveService = new GFGS_Google_DriveService(...);
   *   $files = $driveService->files;
   *  </code>
   */
  class GFGS_Google_FilesServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Creates a copy of the specified file. (files.copy)
     *
     * @param string $fileId The ID of the file to copy.
     * @param GFGS_Google_DriveFile $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool convert Whether to convert this file to the corresponding Google Docs format.
     * @opt_param bool ocr Whether to attempt OCR on .jpg, .png, .gif, or .pdf uploads.
     * @opt_param string ocrLanguage If ocr is true, hints at the language to use. Valid values are ISO 639-1 codes.
     * @opt_param bool pinned Whether to pin the head revision of the new copy.
     * @opt_param string sourceLanguage The language of the original file to be translated.
     * @opt_param string targetLanguage Target language to translate the file to. If no sourceLanguage is provided, the API will attempt to detect the language.
     * @opt_param string timedTextLanguage The language of the timed text.
     * @opt_param string timedTextTrackName The timed text track name.
     * @return GFGS_Google_DriveFile
     */
    public function copy($fileId, GFGS_Google_DriveFile $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('copy', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_DriveFile($data);
      } else {
        return $data;
      }
    }
    /**
     * Permanently deletes a file by ID. Skips the trash. (files.delete)
     *
     * @param string $fileId The ID of the file to delete.
     * @param array $optParams Optional parameters.
     */
    public function delete($fileId, $optParams = array()) {
      $params = array('fileId' => $fileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Gets a file's metadata by ID. (files.get)
     *
     * @param string $fileId The ID for the file in question.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string projection This parameter is deprecated and has no function.
     * @opt_param bool updateViewedDate Whether to update the view date after successfully retrieving the file.
     * @return GFGS_Google_DriveFile
     */
    public function get($fileId, $optParams = array()) {
      $params = array('fileId' => $fileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_DriveFile($data);
      } else {
        return $data;
      }
    }
    /**
     * Insert a new file. (files.insert)
     *
     * @param GFGS_Google_DriveFile $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool convert Whether to convert this file to the corresponding Google Docs format.
     * @opt_param bool ocr Whether to attempt OCR on .jpg, .png, .gif, or .pdf uploads.
     * @opt_param string ocrLanguage If ocr is true, hints at the language to use. Valid values are ISO 639-1 codes.
     * @opt_param bool pinned Whether to pin the head revision of the uploaded file.
     * @opt_param string sourceLanguage The language of the original file to be translated.
     * @opt_param string targetLanguage Target language to translate the file to. If no sourceLanguage is provided, the API will attempt to detect the language.
     * @opt_param string timedTextLanguage The language of the timed text.
     * @opt_param string timedTextTrackName The timed text track name.
     * @return GFGS_Google_DriveFile
     */
    public function insert(GFGS_Google_DriveFile $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_DriveFile($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists the user's files. (files.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults Maximum number of files to return.
     * @opt_param string pageToken Page token for files.
     * @opt_param string projection This parameter is deprecated and has no function.
     * @opt_param string q Query string for searching files.
     * @return GFGS_Google_FileList
     */
    public function listFiles($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_FileList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates file metadata and/or content. This method supports patch semantics. (files.patch)
     *
     * @param string $fileId The ID of the file to update.
     * @param GFGS_Google_DriveFile $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool convert Whether to convert this file to the corresponding Google Docs format.
     * @opt_param bool newRevision Whether a blob upload should create a new revision. If false, the blob data in the current head revision will be replaced.
     * @opt_param bool ocr Whether to attempt OCR on .jpg, .png, .gif, or .pdf uploads.
     * @opt_param string ocrLanguage If ocr is true, hints at the language to use. Valid values are ISO 639-1 codes.
     * @opt_param bool pinned Whether to pin the new revision.
     * @opt_param bool setModifiedDate Whether to set the modified date with the supplied modified date.
     * @opt_param string sourceLanguage The language of the original file to be translated.
     * @opt_param string targetLanguage Target language to translate the file to. If no sourceLanguage is provided, the API will attempt to detect the language.
     * @opt_param string timedTextLanguage The language of the timed text.
     * @opt_param string timedTextTrackName The timed text track name.
     * @opt_param bool updateViewedDate Whether to update the view date after successfully updating the file.
     * @return GFGS_Google_DriveFile
     */
    public function patch($fileId, GFGS_Google_DriveFile $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_DriveFile($data);
      } else {
        return $data;
      }
    }
    /**
     * Set the file's updated time to the current server time. (files.touch)
     *
     * @param string $fileId The ID of the file to update.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_DriveFile
     */
    public function touch($fileId, $optParams = array()) {
      $params = array('fileId' => $fileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('touch', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_DriveFile($data);
      } else {
        return $data;
      }
    }
    /**
     * Moves a file to the trash. (files.trash)
     *
     * @param string $fileId The ID of the file to trash.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_DriveFile
     */
    public function trash($fileId, $optParams = array()) {
      $params = array('fileId' => $fileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('trash', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_DriveFile($data);
      } else {
        return $data;
      }
    }
    /**
     * Restores a file from the trash. (files.untrash)
     *
     * @param string $fileId The ID of the file to untrash.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_DriveFile
     */
    public function untrash($fileId, $optParams = array()) {
      $params = array('fileId' => $fileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('untrash', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_DriveFile($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates file metadata and/or content (files.update)
     *
     * @param string $fileId The ID of the file to update.
     * @param GFGS_Google_DriveFile $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool convert Whether to convert this file to the corresponding Google Docs format.
     * @opt_param bool newRevision Whether a blob upload should create a new revision. If false, the blob data in the current head revision will be replaced.
     * @opt_param bool ocr Whether to attempt OCR on .jpg, .png, .gif, or .pdf uploads.
     * @opt_param string ocrLanguage If ocr is true, hints at the language to use. Valid values are ISO 639-1 codes.
     * @opt_param bool pinned Whether to pin the new revision.
     * @opt_param bool setModifiedDate Whether to set the modified date with the supplied modified date.
     * @opt_param string sourceLanguage The language of the original file to be translated.
     * @opt_param string targetLanguage Target language to translate the file to. If no sourceLanguage is provided, the API will attempt to detect the language.
     * @opt_param string timedTextLanguage The language of the timed text.
     * @opt_param string timedTextTrackName The timed text track name.
     * @opt_param bool updateViewedDate Whether to update the view date after successfully updating the file.
     * @return GFGS_Google_DriveFile
     */
    public function update($fileId, GFGS_Google_DriveFile $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_DriveFile($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "parents" collection of methods.
   * Typical usage is:
   *  <code>
   *   $driveService = new GFGS_Google_DriveService(...);
   *   $parents = $driveService->parents;
   *  </code>
   */
  class GFGS_Google_ParentsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Removes a parent from a file. (parents.delete)
     *
     * @param string $fileId The ID of the file.
     * @param string $parentId The ID of the parent.
     * @param array $optParams Optional parameters.
     */
    public function delete($fileId, $parentId, $optParams = array()) {
      $params = array('fileId' => $fileId, 'parentId' => $parentId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Gets a specific parent reference. (parents.get)
     *
     * @param string $fileId The ID of the file.
     * @param string $parentId The ID of the parent.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_ParentReference
     */
    public function get($fileId, $parentId, $optParams = array()) {
      $params = array('fileId' => $fileId, 'parentId' => $parentId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_ParentReference($data);
      } else {
        return $data;
      }
    }
    /**
     * Adds a parent folder for a file. (parents.insert)
     *
     * @param string $fileId The ID of the file.
     * @param GFGS_Google_ParentReference $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_ParentReference
     */
    public function insert($fileId, GFGS_Google_ParentReference $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_ParentReference($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists a file's parents. (parents.list)
     *
     * @param string $fileId The ID of the file.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_ParentList
     */
    public function listParents($fileId, $optParams = array()) {
      $params = array('fileId' => $fileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_ParentList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "permissions" collection of methods.
   * Typical usage is:
   *  <code>
   *   $driveService = new GFGS_Google_DriveService(...);
   *   $permissions = $driveService->permissions;
   *  </code>
   */
  class GFGS_Google_PermissionsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Deletes a permission from a file. (permissions.delete)
     *
     * @param string $fileId The ID for the file.
     * @param string $permissionId The ID for the permission.
     * @param array $optParams Optional parameters.
     */
    public function delete($fileId, $permissionId, $optParams = array()) {
      $params = array('fileId' => $fileId, 'permissionId' => $permissionId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Gets a permission by ID. (permissions.get)
     *
     * @param string $fileId The ID for the file.
     * @param string $permissionId The ID for the permission.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Permission
     */
    public function get($fileId, $permissionId, $optParams = array()) {
      $params = array('fileId' => $fileId, 'permissionId' => $permissionId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Permission($data);
      } else {
        return $data;
      }
    }
    /**
     * Inserts a permission for a file. (permissions.insert)
     *
     * @param string $fileId The ID for the file.
     * @param GFGS_Google_Permission $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool sendNotificationEmails Whether to send notification emails.
     * @return GFGS_Google_Permission
     */
    public function insert($fileId, GFGS_Google_Permission $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Permission($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists a file's permissions. (permissions.list)
     *
     * @param string $fileId The ID for the file.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_PermissionList
     */
    public function listPermissions($fileId, $optParams = array()) {
      $params = array('fileId' => $fileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_PermissionList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a permission. This method supports patch semantics. (permissions.patch)
     *
     * @param string $fileId The ID for the file.
     * @param string $permissionId The ID for the permission.
     * @param GFGS_Google_Permission $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Permission
     */
    public function patch($fileId, $permissionId, GFGS_Google_Permission $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'permissionId' => $permissionId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Permission($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a permission. (permissions.update)
     *
     * @param string $fileId The ID for the file.
     * @param string $permissionId The ID for the permission.
     * @param GFGS_Google_Permission $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Permission
     */
    public function update($fileId, $permissionId, GFGS_Google_Permission $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'permissionId' => $permissionId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Permission($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "replies" collection of methods.
   * Typical usage is:
   *  <code>
   *   $driveService = new GFGS_Google_DriveService(...);
   *   $replies = $driveService->replies;
   *  </code>
   */
  class GFGS_Google_RepliesServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Deletes a reply. (replies.delete)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param string $replyId The ID of the reply.
     * @param array $optParams Optional parameters.
     */
    public function delete($fileId, $commentId, $replyId, $optParams = array()) {
      $params = array('fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Gets a reply. (replies.get)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param string $replyId The ID of the reply.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeDeleted If set, this will succeed when retrieving a deleted reply.
     * @return GFGS_Google_CommentReply
     */
    public function get($fileId, $commentId, $replyId, $optParams = array()) {
      $params = array('fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_CommentReply($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a new reply to the given comment. (replies.insert)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param GFGS_Google_CommentReply $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_CommentReply
     */
    public function insert($fileId, $commentId, GFGS_Google_CommentReply $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'commentId' => $commentId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_CommentReply($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists all of the replies to a comment. (replies.list)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeDeleted If set, all replies, including deleted replies (with content stripped) will be returned.
     * @opt_param int maxResults The maximum number of replies to include in the response, used for paging.
     * @opt_param string pageToken The continuation token, used to page through large result sets. To get the next page of results, set this parameter to the value of "nextPageToken" from the previous response.
     * @return GFGS_Google_CommentReplyList
     */
    public function listReplies($fileId, $commentId, $optParams = array()) {
      $params = array('fileId' => $fileId, 'commentId' => $commentId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_CommentReplyList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing reply. This method supports patch semantics. (replies.patch)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param string $replyId The ID of the reply.
     * @param GFGS_Google_CommentReply $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_CommentReply
     */
    public function patch($fileId, $commentId, $replyId, GFGS_Google_CommentReply $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_CommentReply($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing reply. (replies.update)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param string $replyId The ID of the reply.
     * @param GFGS_Google_CommentReply $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_CommentReply
     */
    public function update($fileId, $commentId, $replyId, GFGS_Google_CommentReply $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_CommentReply($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "revisions" collection of methods.
   * Typical usage is:
   *  <code>
   *   $driveService = new GFGS_Google_DriveService(...);
   *   $revisions = $driveService->revisions;
   *  </code>
   */
  class GFGS_Google_RevisionsServiceResource extends GFGS_Google_ServiceResource {


    /**
     * Removes a revision. (revisions.delete)
     *
     * @param string $fileId The ID of the file.
     * @param string $revisionId The ID of the revision.
     * @param array $optParams Optional parameters.
     */
    public function delete($fileId, $revisionId, $optParams = array()) {
      $params = array('fileId' => $fileId, 'revisionId' => $revisionId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Gets a specific revision. (revisions.get)
     *
     * @param string $fileId The ID of the file.
     * @param string $revisionId The ID of the revision.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Revision
     */
    public function get($fileId, $revisionId, $optParams = array()) {
      $params = array('fileId' => $fileId, 'revisionId' => $revisionId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Revision($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists a file's revisions. (revisions.list)
     *
     * @param string $fileId The ID of the file.
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_RevisionList
     */
    public function listRevisions($fileId, $optParams = array()) {
      $params = array('fileId' => $fileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_RevisionList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a revision. This method supports patch semantics. (revisions.patch)
     *
     * @param string $fileId The ID for the file.
     * @param string $revisionId The ID for the revision.
     * @param GFGS_Google_Revision $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Revision
     */
    public function patch($fileId, $revisionId, GFGS_Google_Revision $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'revisionId' => $revisionId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Revision($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a revision. (revisions.update)
     *
     * @param string $fileId The ID for the file.
     * @param string $revisionId The ID for the revision.
     * @param GFGS_Google_Revision $postBody
     * @param array $optParams Optional parameters.
     * @return GFGS_Google_Revision
     */
    public function update($fileId, $revisionId, GFGS_Google_Revision $postBody, $optParams = array()) {
      $params = array('fileId' => $fileId, 'revisionId' => $revisionId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new GFGS_Google_Revision($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for Google_Drive (v2).
 *
 * <p>
 * The API to interact with Drive.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/drive/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class GFGS_Google_DriveService extends GFGS_Google_Service {
  public $about;
  public $apps;
  public $changes;
  public $children;
  public $comments;
  public $files;
  public $parents;
  public $permissions;
  public $replies;
  public $revisions;
  /**
   * Constructs the internal representation of the Drive service.
   *
   * @param GFGSC_Google_Client_Connector $client
   */
  public function __construct(GFGSC_Google_Client_Connector $client) {
    $this->servicePath = 'drive/v2/';
    $this->version = 'v2';
    $this->serviceName = 'drive';

    $client->addService($this->serviceName, $this->version);
    $this->about = new GFGS_Google_AboutServiceResource($this, $this->serviceName, 'about', json_decode('{"methods": {"get": {"id": "drive.about.get", "path": "about", "httpMethod": "GET", "parameters": {"includeSubscribed": {"type": "boolean", "default": "true", "location": "query"}, "maxChangeIdCount": {"type": "string", "default": "1", "format": "int64", "location": "query"}, "startChangeId": {"type": "string", "format": "int64", "location": "query"}}, "response": {"$ref": "About"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}}}', true));
    $this->apps = new GFGS_Google_AppsServiceResource($this, $this->serviceName, 'apps', json_decode('{"methods": {"get": {"id": "drive.apps.get", "path": "apps/{appId}", "httpMethod": "GET", "parameters": {"appId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "App"}, "scopes": ["https://www.googleapis.com/auth/drive.apps.readonly"]}, "list": {"id": "drive.apps.list", "path": "apps", "httpMethod": "GET", "response": {"$ref": "AppList"}, "scopes": ["https://www.googleapis.com/auth/drive.apps.readonly"]}}}', true));
    $this->changes = new GFGS_Google_ChangesServiceResource($this, $this->serviceName, 'changes', json_decode('{"methods": {"get": {"id": "drive.changes.get", "path": "changes/{changeId}", "httpMethod": "GET", "parameters": {"changeId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Change"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}, "list": {"id": "drive.changes.list", "path": "changes", "httpMethod": "GET", "parameters": {"includeDeleted": {"type": "boolean", "default": "true", "location": "query"}, "includeSubscribed": {"type": "boolean", "default": "true", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "int32", "minimum": "0", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "startChangeId": {"type": "string", "format": "int64", "location": "query"}}, "response": {"$ref": "ChangeList"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}}}', true));
    $this->children = new GFGS_Google_ChildrenServiceResource($this, $this->serviceName, 'children', json_decode('{"methods": {"delete": {"id": "drive.children.delete", "path": "files/{folderId}/children/{childId}", "httpMethod": "DELETE", "parameters": {"childId": {"type": "string", "required": true, "location": "path"}, "folderId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "get": {"id": "drive.children.get", "path": "files/{folderId}/children/{childId}", "httpMethod": "GET", "parameters": {"childId": {"type": "string", "required": true, "location": "path"}, "folderId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "ChildReference"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}, "insert": {"id": "drive.children.insert", "path": "files/{folderId}/children", "httpMethod": "POST", "parameters": {"folderId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "ChildReference"}, "response": {"$ref": "ChildReference"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "list": {"id": "drive.children.list", "path": "files/{folderId}/children", "httpMethod": "GET", "parameters": {"folderId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "default": "100", "format": "int32", "minimum": "0", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "q": {"type": "string", "location": "query"}}, "response": {"$ref": "ChildList"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}}}', true));
    $this->comments = new GFGS_Google_CommentsServiceResource($this, $this->serviceName, 'comments', json_decode('{"methods": {"delete": {"id": "drive.comments.delete", "path": "files/{fileId}/comments/{commentId}", "httpMethod": "DELETE", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}, "fileId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.readonly"]}, "get": {"id": "drive.comments.get", "path": "files/{fileId}/comments/{commentId}", "httpMethod": "GET", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}, "fileId": {"type": "string", "required": true, "location": "path"}, "includeDeleted": {"type": "boolean", "default": "false", "location": "query"}}, "response": {"$ref": "Comment"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.readonly"]}, "insert": {"id": "drive.comments.insert", "path": "files/{fileId}/comments", "httpMethod": "POST", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Comment"}, "response": {"$ref": "Comment"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.readonly"]}, "list": {"id": "drive.comments.list", "path": "files/{fileId}/comments", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "includeDeleted": {"type": "boolean", "default": "false", "location": "query"}, "maxResults": {"type": "integer", "default": "20", "format": "int32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "updatedMin": {"type": "string", "location": "query"}}, "response": {"$ref": "CommentList"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.readonly"]}, "patch": {"id": "drive.comments.patch", "path": "files/{fileId}/comments/{commentId}", "httpMethod": "PATCH", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}, "fileId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Comment"}, "response": {"$ref": "Comment"}, "scopes": ["https://www.googleapis.com/auth/drive"]}, "update": {"id": "drive.comments.update", "path": "files/{fileId}/comments/{commentId}", "httpMethod": "PUT", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}, "fileId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Comment"}, "response": {"$ref": "Comment"}, "scopes": ["https://www.googleapis.com/auth/drive"]}}}', true));
    $this->files = new GFGS_Google_FilesServiceResource($this, $this->serviceName, 'files', json_decode('{"methods": {"copy": {"id": "drive.files.copy", "path": "files/{fileId}/copy", "httpMethod": "POST", "parameters": {"convert": {"type": "boolean", "default": "false", "location": "query"}, "fileId": {"type": "string", "required": true, "location": "path"}, "ocr": {"type": "boolean", "default": "false", "location": "query"}, "ocrLanguage": {"type": "string", "location": "query"}, "pinned": {"type": "boolean", "default": "false", "location": "query"}, "sourceLanguage": {"type": "string", "location": "query"}, "targetLanguage": {"type": "string", "location": "query"}, "timedTextLanguage": {"type": "string", "location": "query"}, "timedTextTrackName": {"type": "string", "location": "query"}}, "request": {"$ref": "File"}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "delete": {"id": "drive.files.delete", "path": "files/{fileId}", "httpMethod": "DELETE", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "get": {"id": "drive.files.get", "path": "files/{fileId}", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "projection": {"type": "string", "enum": ["BASIC", "FULL"], "location": "query"}, "updateViewedDate": {"type": "boolean", "default": "false", "location": "query"}}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}, "insert": {"id": "drive.files.insert", "path": "files", "httpMethod": "POST", "parameters": {"convert": {"type": "boolean", "default": "false", "location": "query"}, "ocr": {"type": "boolean", "default": "false", "location": "query"}, "ocrLanguage": {"type": "string", "location": "query"}, "pinned": {"type": "boolean", "default": "false", "location": "query"}, "sourceLanguage": {"type": "string", "location": "query"}, "targetLanguage": {"type": "string", "location": "query"}, "timedTextLanguage": {"type": "string", "location": "query"}, "timedTextTrackName": {"type": "string", "location": "query"}}, "request": {"$ref": "File"}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"], "supportsMediaUpload": true, "mediaUpload": {"accept": ["*/*"], "maxSize": "10GB", "protocols": {"simple": {"multipart": true, "path": "/upload/drive/v2/files"}, "resumable": {"multipart": true, "path": "/resumable/upload/drive/v2/files"}}}}, "list": {"id": "drive.files.list", "path": "files", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "default": "100", "format": "int32", "minimum": "0", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "projection": {"type": "string", "enum": ["BASIC", "FULL"], "location": "query"}, "q": {"type": "string", "location": "query"}}, "response": {"$ref": "FileList"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}, "patch": {"id": "drive.files.patch", "path": "files/{fileId}", "httpMethod": "PATCH", "parameters": {"convert": {"type": "boolean", "default": "false", "location": "query"}, "fileId": {"type": "string", "required": true, "location": "path"}, "newRevision": {"type": "boolean", "default": "true", "location": "query"}, "ocr": {"type": "boolean", "default": "false", "location": "query"}, "ocrLanguage": {"type": "string", "location": "query"}, "pinned": {"type": "boolean", "default": "false", "location": "query"}, "setModifiedDate": {"type": "boolean", "default": "false", "location": "query"}, "sourceLanguage": {"type": "string", "location": "query"}, "targetLanguage": {"type": "string", "location": "query"}, "timedTextLanguage": {"type": "string", "location": "query"}, "timedTextTrackName": {"type": "string", "location": "query"}, "updateViewedDate": {"type": "boolean", "default": "true", "location": "query"}}, "request": {"$ref": "File"}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "touch": {"id": "drive.files.touch", "path": "files/{fileId}/touch", "httpMethod": "POST", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "trash": {"id": "drive.files.trash", "path": "files/{fileId}/trash", "httpMethod": "POST", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "untrash": {"id": "drive.files.untrash", "path": "files/{fileId}/untrash", "httpMethod": "POST", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "update": {"id": "drive.files.update", "path": "files/{fileId}", "httpMethod": "PUT", "parameters": {"convert": {"type": "boolean", "default": "false", "location": "query"}, "fileId": {"type": "string", "required": true, "location": "path"}, "newRevision": {"type": "boolean", "default": "true", "location": "query"}, "ocr": {"type": "boolean", "default": "false", "location": "query"}, "ocrLanguage": {"type": "string", "location": "query"}, "pinned": {"type": "boolean", "default": "false", "location": "query"}, "setModifiedDate": {"type": "boolean", "default": "false", "location": "query"}, "sourceLanguage": {"type": "string", "location": "query"}, "targetLanguage": {"type": "string", "location": "query"}, "timedTextLanguage": {"type": "string", "location": "query"}, "timedTextTrackName": {"type": "string", "location": "query"}, "updateViewedDate": {"type": "boolean", "default": "true", "location": "query"}}, "request": {"$ref": "File"}, "response": {"$ref": "File"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"], "supportsMediaUpload": true, "mediaUpload": {"accept": ["*/*"], "maxSize": "10GB", "protocols": {"simple": {"multipart": true, "path": "/upload/drive/v2/files/{fileId}"}, "resumable": {"multipart": true, "path": "/resumable/upload/drive/v2/files/{fileId}"}}}}}}', true));
    $this->parents = new GFGS_Google_ParentsServiceResource($this, $this->serviceName, 'parents', json_decode('{"methods": {"delete": {"id": "drive.parents.delete", "path": "files/{fileId}/parents/{parentId}", "httpMethod": "DELETE", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "parentId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "get": {"id": "drive.parents.get", "path": "files/{fileId}/parents/{parentId}", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "parentId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "ParentReference"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}, "insert": {"id": "drive.parents.insert", "path": "files/{fileId}/parents", "httpMethod": "POST", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "ParentReference"}, "response": {"$ref": "ParentReference"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "list": {"id": "drive.parents.list", "path": "files/{fileId}/parents", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "ParentList"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}}}', true));
    $this->permissions = new GFGS_Google_PermissionsServiceResource($this, $this->serviceName, 'permissions', json_decode('{"methods": {"delete": {"id": "drive.permissions.delete", "path": "files/{fileId}/permissions/{permissionId}", "httpMethod": "DELETE", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "permissionId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "get": {"id": "drive.permissions.get", "path": "files/{fileId}/permissions/{permissionId}", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "permissionId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Permission"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}, "insert": {"id": "drive.permissions.insert", "path": "files/{fileId}/permissions", "httpMethod": "POST", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "sendNotificationEmails": {"type": "boolean", "default": "true", "location": "query"}}, "request": {"$ref": "Permission"}, "response": {"$ref": "Permission"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "list": {"id": "drive.permissions.list", "path": "files/{fileId}/permissions", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "PermissionList"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}, "patch": {"id": "drive.permissions.patch", "path": "files/{fileId}/permissions/{permissionId}", "httpMethod": "PATCH", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "permissionId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Permission"}, "response": {"$ref": "Permission"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "update": {"id": "drive.permissions.update", "path": "files/{fileId}/permissions/{permissionId}", "httpMethod": "PUT", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "permissionId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Permission"}, "response": {"$ref": "Permission"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}}}', true));
    $this->replies = new GFGS_Google_RepliesServiceResource($this, $this->serviceName, 'replies', json_decode('{"methods": {"delete": {"id": "drive.replies.delete", "path": "files/{fileId}/comments/{commentId}/replies/{replyId}", "httpMethod": "DELETE", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}, "fileId": {"type": "string", "required": true, "location": "path"}, "replyId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/drive"]}, "get": {"id": "drive.replies.get", "path": "files/{fileId}/comments/{commentId}/replies/{replyId}", "httpMethod": "GET", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}, "fileId": {"type": "string", "required": true, "location": "path"}, "includeDeleted": {"type": "boolean", "default": "false", "location": "query"}, "replyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CommentReply"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.readonly"]}, "insert": {"id": "drive.replies.insert", "path": "files/{fileId}/comments/{commentId}/replies", "httpMethod": "POST", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}, "fileId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "CommentReply"}, "response": {"$ref": "CommentReply"}, "scopes": ["https://www.googleapis.com/auth/drive"]}, "list": {"id": "drive.replies.list", "path": "files/{fileId}/comments/{commentId}/replies", "httpMethod": "GET", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}, "fileId": {"type": "string", "required": true, "location": "path"}, "includeDeleted": {"type": "boolean", "default": "false", "location": "query"}, "maxResults": {"type": "integer", "default": "20", "format": "int32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CommentReplyList"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.readonly"]}, "patch": {"id": "drive.replies.patch", "path": "files/{fileId}/comments/{commentId}/replies/{replyId}", "httpMethod": "PATCH", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}, "fileId": {"type": "string", "required": true, "location": "path"}, "replyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "CommentReply"}, "response": {"$ref": "CommentReply"}, "scopes": ["https://www.googleapis.com/auth/drive"]}, "update": {"id": "drive.replies.update", "path": "files/{fileId}/comments/{commentId}/replies/{replyId}", "httpMethod": "PUT", "parameters": {"commentId": {"type": "string", "required": true, "location": "path"}, "fileId": {"type": "string", "required": true, "location": "path"}, "replyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "CommentReply"}, "response": {"$ref": "CommentReply"}, "scopes": ["https://www.googleapis.com/auth/drive"]}}}', true));
    $this->revisions = new GFGS_Google_RevisionsServiceResource($this, $this->serviceName, 'revisions', json_decode('{"methods": {"delete": {"id": "drive.revisions.delete", "path": "files/{fileId}/revisions/{revisionId}", "httpMethod": "DELETE", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "revisionId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "get": {"id": "drive.revisions.get", "path": "files/{fileId}/revisions/{revisionId}", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "revisionId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Revision"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}, "list": {"id": "drive.revisions.list", "path": "files/{fileId}/revisions", "httpMethod": "GET", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "RevisionList"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file", "https://www.googleapis.com/auth/drive.metadata.readonly", "https://www.googleapis.com/auth/drive.readonly"]}, "patch": {"id": "drive.revisions.patch", "path": "files/{fileId}/revisions/{revisionId}", "httpMethod": "PATCH", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "revisionId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Revision"}, "response": {"$ref": "Revision"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}, "update": {"id": "drive.revisions.update", "path": "files/{fileId}/revisions/{revisionId}", "httpMethod": "PUT", "parameters": {"fileId": {"type": "string", "required": true, "location": "path"}, "revisionId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Revision"}, "response": {"$ref": "Revision"}, "scopes": ["https://www.googleapis.com/auth/drive", "https://www.googleapis.com/auth/drive.file"]}}}', true));

  }
}

class GFGS_Google_About extends GFGS_Google_Model {
  protected $__additionalRoleInfoType = 'GFGS_Google_AboutAdditionalRoleInfo';
  protected $__additionalRoleInfoDataType = 'array';
  public $additionalRoleInfo;
  public $domainSharingPolicy;
  public $etag;
  protected $__exportFormatsType = 'GFGS_Google_AboutExportFormats';
  protected $__exportFormatsDataType = 'array';
  public $exportFormats;
  protected $__featuresType = 'GFGS_Google_AboutFeatures';
  protected $__featuresDataType = 'array';
  public $features;
  protected $__importFormatsType = 'GFGS_Google_AboutImportFormats';
  protected $__importFormatsDataType = 'array';
  public $importFormats;
  public $isCurrentAppInstalled;
  public $kind;
  public $largestChangeId;
  protected $__maxUploadSizesType = 'GFGS_Google_AboutMaxUploadSizes';
  protected $__maxUploadSizesDataType = 'array';
  public $maxUploadSizes;
  public $name;
  public $permissionId;
  public $quotaBytesTotal;
  public $quotaBytesUsed;
  public $quotaBytesUsedAggregate;
  public $quotaBytesUsedInTrash;
  public $remainingChangeIds;
  public $rootFolderId;
  public $selfLink;
  protected $__userType = 'GFGS_Google_User';
  protected $__userDataType = '';
  public $user;
  public function setAdditionalRoleInfo(/* array(GFGS_Google_AboutAdditionalRoleInfo) */ $additionalRoleInfo) {
    $this->assertIsArray($additionalRoleInfo, 'GFGS_Google_AboutAdditionalRoleInfo', __METHOD__);
    $this->additionalRoleInfo = $additionalRoleInfo;
  }
  public function getAdditionalRoleInfo() {
    return $this->additionalRoleInfo;
  }
  public function setDomainSharingPolicy($domainSharingPolicy) {
    $this->domainSharingPolicy = $domainSharingPolicy;
  }
  public function getDomainSharingPolicy() {
    return $this->domainSharingPolicy;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setExportFormats(/* array(GFGS_Google_AboutExportFormats) */ $exportFormats) {
    $this->assertIsArray($exportFormats, 'GFGS_Google_AboutExportFormats', __METHOD__);
    $this->exportFormats = $exportFormats;
  }
  public function getExportFormats() {
    return $this->exportFormats;
  }
  public function setFeatures(/* array(GFGS_Google_AboutFeatures) */ $features) {
    $this->assertIsArray($features, 'GFGS_Google_AboutFeatures', __METHOD__);
    $this->features = $features;
  }
  public function getFeatures() {
    return $this->features;
  }
  public function setImportFormats(/* array(GFGS_Google_AboutImportFormats) */ $importFormats) {
    $this->assertIsArray($importFormats, 'GFGS_Google_AboutImportFormats', __METHOD__);
    $this->importFormats = $importFormats;
  }
  public function getImportFormats() {
    return $this->importFormats;
  }
  public function setIsCurrentAppInstalled($isCurrentAppInstalled) {
    $this->isCurrentAppInstalled = $isCurrentAppInstalled;
  }
  public function getIsCurrentAppInstalled() {
    return $this->isCurrentAppInstalled;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLargestChangeId($largestChangeId) {
    $this->largestChangeId = $largestChangeId;
  }
  public function getLargestChangeId() {
    return $this->largestChangeId;
  }
  public function setMaxUploadSizes(/* array(GFGS_Google_AboutMaxUploadSizes) */ $maxUploadSizes) {
    $this->assertIsArray($maxUploadSizes, 'GFGS_Google_AboutMaxUploadSizes', __METHOD__);
    $this->maxUploadSizes = $maxUploadSizes;
  }
  public function getMaxUploadSizes() {
    return $this->maxUploadSizes;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setPermissionId($permissionId) {
    $this->permissionId = $permissionId;
  }
  public function getPermissionId() {
    return $this->permissionId;
  }
  public function setQuotaBytesTotal($quotaBytesTotal) {
    $this->quotaBytesTotal = $quotaBytesTotal;
  }
  public function getQuotaBytesTotal() {
    return $this->quotaBytesTotal;
  }
  public function setQuotaBytesUsed($quotaBytesUsed) {
    $this->quotaBytesUsed = $quotaBytesUsed;
  }
  public function getQuotaBytesUsed() {
    return $this->quotaBytesUsed;
  }
  public function setQuotaBytesUsedAggregate($quotaBytesUsedAggregate) {
    $this->quotaBytesUsedAggregate = $quotaBytesUsedAggregate;
  }
  public function getQuotaBytesUsedAggregate() {
    return $this->quotaBytesUsedAggregate;
  }
  public function setQuotaBytesUsedInTrash($quotaBytesUsedInTrash) {
    $this->quotaBytesUsedInTrash = $quotaBytesUsedInTrash;
  }
  public function getQuotaBytesUsedInTrash() {
    return $this->quotaBytesUsedInTrash;
  }
  public function setRemainingChangeIds($remainingChangeIds) {
    $this->remainingChangeIds = $remainingChangeIds;
  }
  public function getRemainingChangeIds() {
    return $this->remainingChangeIds;
  }
  public function setRootFolderId($rootFolderId) {
    $this->rootFolderId = $rootFolderId;
  }
  public function getRootFolderId() {
    return $this->rootFolderId;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setUser(GFGS_Google_User $user) {
    $this->user = $user;
  }
  public function getUser() {
    return $this->user;
  }
}

class GFGS_Google_AboutAdditionalRoleInfo extends GFGS_Google_Model {
  protected $__roleSetsType = 'GFGS_Google_AboutAdditionalRoleInfoRoleSets';
  protected $__roleSetsDataType = 'array';
  public $roleSets;
  public $type;
  public function setRoleSets(/* array(GFGS_Google_AboutAdditionalRoleInfoRoleSets) */ $roleSets) {
    $this->assertIsArray($roleSets, 'GFGS_Google_AboutAdditionalRoleInfoRoleSets', __METHOD__);
    $this->roleSets = $roleSets;
  }
  public function getRoleSets() {
    return $this->roleSets;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class GFGS_Google_AboutAdditionalRoleInfoRoleSets extends GFGS_Google_Model {
  public $additionalRoles;
  public $primaryRole;
  public function setAdditionalRoles( $additionalRoles) {
    $this->additionalRoles = $additionalRoles;
  }
  public function getAdditionalRoles() {
    return $this->additionalRoles;
  }
  public function setPrimaryRole($primaryRole) {
    $this->primaryRole = $primaryRole;
  }
  public function getPrimaryRole() {
    return $this->primaryRole;
  }
}

class GFGS_Google_AboutExportFormats extends GFGS_Google_Model {
  public $source;
  public $targets;
  public function setSource($source) {
    $this->source = $source;
  }
  public function getSource() {
    return $this->source;
  }
  public function setTargets( $targets) {
    $this->targets = $targets;
  }
  public function getTargets() {
    return $this->targets;
  }
}

class GFGS_Google_AboutFeatures extends GFGS_Google_Model {
  public $featureName;
  public $featureRate;
  public function setFeatureName($featureName) {
    $this->featureName = $featureName;
  }
  public function getFeatureName() {
    return $this->featureName;
  }
  public function setFeatureRate($featureRate) {
    $this->featureRate = $featureRate;
  }
  public function getFeatureRate() {
    return $this->featureRate;
  }
}

class GFGS_Google_AboutImportFormats extends GFGS_Google_Model {
  public $source;
  public $targets;
  public function setSource($source) {
    $this->source = $source;
  }
  public function getSource() {
    return $this->source;
  }
  public function setTargets( $targets) {
    $this->targets = $targets;
  }
  public function getTargets() {
    return $this->targets;
  }
}

class GFGS_Google_AboutMaxUploadSizes extends GFGS_Google_Model {
  public $size;
  public $type;
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

class GFGS_Google_App extends GFGS_Google_Model {
  public $authorized;
  protected $__iconsType = 'GFGS_Google_AppIcons';
  protected $__iconsDataType = 'array';
  public $icons;
  public $id;
  public $installed;
  public $kind;
  public $name;
  public $objectType;
  public $primaryFileExtensions;
  public $primaryMimeTypes;
  public $productUrl;
  public $secondaryFileExtensions;
  public $secondaryMimeTypes;
  public $supportsCreate;
  public $supportsImport;
  public $useByDefault;
  public function setAuthorized($authorized) {
    $this->authorized = $authorized;
  }
  public function getAuthorized() {
    return $this->authorized;
  }
  public function setIcons(/* array(GFGS_Google_AppIcons) */ $icons) {
    $this->assertIsArray($icons, 'GFGS_Google_AppIcons', __METHOD__);
    $this->icons = $icons;
  }
  public function getIcons() {
    return $this->icons;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setInstalled($installed) {
    $this->installed = $installed;
  }
  public function getInstalled() {
    return $this->installed;
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
  public function setObjectType($objectType) {
    $this->objectType = $objectType;
  }
  public function getObjectType() {
    return $this->objectType;
  }
  public function setPrimaryFileExtensions( $primaryFileExtensions) {
    $this->primaryFileExtensions = $primaryFileExtensions;
  }
  public function getPrimaryFileExtensions() {
    return $this->primaryFileExtensions;
  }
  public function setPrimaryMimeTypes( $primaryMimeTypes) {
    $this->primaryMimeTypes = $primaryMimeTypes;
  }
  public function getPrimaryMimeTypes() {
    return $this->primaryMimeTypes;
  }
  public function setProductUrl($productUrl) {
    $this->productUrl = $productUrl;
  }
  public function getProductUrl() {
    return $this->productUrl;
  }
  public function setSecondaryFileExtensions( $secondaryFileExtensions) {
    $this->secondaryFileExtensions = $secondaryFileExtensions;
  }
  public function getSecondaryFileExtensions() {
    return $this->secondaryFileExtensions;
  }
  public function setSecondaryMimeTypes( $secondaryMimeTypes) {
    $this->secondaryMimeTypes = $secondaryMimeTypes;
  }
  public function getSecondaryMimeTypes() {
    return $this->secondaryMimeTypes;
  }
  public function setSupportsCreate($supportsCreate) {
    $this->supportsCreate = $supportsCreate;
  }
  public function getSupportsCreate() {
    return $this->supportsCreate;
  }
  public function setSupportsImport($supportsImport) {
    $this->supportsImport = $supportsImport;
  }
  public function getSupportsImport() {
    return $this->supportsImport;
  }
  public function setUseByDefault($useByDefault) {
    $this->useByDefault = $useByDefault;
  }
  public function getUseByDefault() {
    return $this->useByDefault;
  }
}

class GFGS_Google_AppIcons extends GFGS_Google_Model {
  public $category;
  public $iconUrl;
  public $size;
  public function setCategory($category) {
    $this->category = $category;
  }
  public function getCategory() {
    return $this->category;
  }
  public function setIconUrl($iconUrl) {
    $this->iconUrl = $iconUrl;
  }
  public function getIconUrl() {
    return $this->iconUrl;
  }
  public function setSize($size) {
    $this->size = $size;
  }
  public function getSize() {
    return $this->size;
  }
}

class GFGS_Google_AppList extends GFGS_Google_Model {
  public $etag;
  protected $__itemsType = 'GFGS_Google_App';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $selfLink;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(GFGS_Google_App) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_App', __METHOD__);
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
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class GFGS_Google_Change extends GFGS_Google_Model {
  public $deleted;
  protected $__fileType = 'GFGS_Google_DriveFile';
  protected $__fileDataType = '';
  public $file;
  public $fileId;
  public $id;
  public $kind;
  public $selfLink;
  public function setDeleted($deleted) {
    $this->deleted = $deleted;
  }
  public function getDeleted() {
    return $this->deleted;
  }
  public function setFile(GFGS_Google_DriveFile $file) {
    $this->file = $file;
  }
  public function getFile() {
    return $this->file;
  }
  public function setFileId($fileId) {
    $this->fileId = $fileId;
  }
  public function getFileId() {
    return $this->fileId;
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
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class GFGS_Google_ChangeList extends GFGS_Google_Model {
  public $etag;
  protected $__itemsType = 'GFGS_Google_Change';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $largestChangeId;
  public $nextLink;
  public $nextPageToken;
  public $selfLink;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(GFGS_Google_Change) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_Change', __METHOD__);
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
  public function setLargestChangeId($largestChangeId) {
    $this->largestChangeId = $largestChangeId;
  }
  public function getLargestChangeId() {
    return $this->largestChangeId;
  }
  public function setNextLink($nextLink) {
    $this->nextLink = $nextLink;
  }
  public function getNextLink() {
    return $this->nextLink;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class GFGS_Google_ChildList extends GFGS_Google_Model {
  public $etag;
  protected $__itemsType = 'GFGS_Google_ChildReference';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextLink;
  public $nextPageToken;
  public $selfLink;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(GFGS_Google_ChildReference) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_ChildReference', __METHOD__);
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
  public function setNextLink($nextLink) {
    $this->nextLink = $nextLink;
  }
  public function getNextLink() {
    return $this->nextLink;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class GFGS_Google_ChildReference extends GFGS_Google_Model {
  public $childLink;
  public $id;
  public $kind;
  public $selfLink;
  public function setChildLink($childLink) {
    $this->childLink = $childLink;
  }
  public function getChildLink() {
    return $this->childLink;
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
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class GFGS_Google_Comment extends GFGS_Google_Model {
  public $anchor;
  protected $__authorType = 'GFGS_Google_User';
  protected $__authorDataType = '';
  public $author;
  public $commentId;
  public $content;
  protected $__contextType = 'GFGS_Google_CommentContext';
  protected $__contextDataType = '';
  public $context;
  public $createdDate;
  public $deleted;
  public $fileId;
  public $fileTitle;
  public $htmlContent;
  public $kind;
  public $modifiedDate;
  protected $__repliesType = 'GFGS_Google_CommentReply';
  protected $__repliesDataType = 'array';
  public $replies;
  public $selfLink;
  public $status;
  public function setAnchor($anchor) {
    $this->anchor = $anchor;
  }
  public function getAnchor() {
    return $this->anchor;
  }
  public function setAuthor(GFGS_Google_User $author) {
    $this->author = $author;
  }
  public function getAuthor() {
    return $this->author;
  }
  public function setCommentId($commentId) {
    $this->commentId = $commentId;
  }
  public function getCommentId() {
    return $this->commentId;
  }
  public function setContent($content) {
    $this->content = $content;
  }
  public function getContent() {
    return $this->content;
  }
  public function setContext(GFGS_Google_CommentContext $context) {
    $this->context = $context;
  }
  public function getContext() {
    return $this->context;
  }
  public function setCreatedDate($createdDate) {
    $this->createdDate = $createdDate;
  }
  public function getCreatedDate() {
    return $this->createdDate;
  }
  public function setDeleted($deleted) {
    $this->deleted = $deleted;
  }
  public function getDeleted() {
    return $this->deleted;
  }
  public function setFileId($fileId) {
    $this->fileId = $fileId;
  }
  public function getFileId() {
    return $this->fileId;
  }
  public function setFileTitle($fileTitle) {
    $this->fileTitle = $fileTitle;
  }
  public function getFileTitle() {
    return $this->fileTitle;
  }
  public function setHtmlContent($htmlContent) {
    $this->htmlContent = $htmlContent;
  }
  public function getHtmlContent() {
    return $this->htmlContent;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setModifiedDate($modifiedDate) {
    $this->modifiedDate = $modifiedDate;
  }
  public function getModifiedDate() {
    return $this->modifiedDate;
  }
  public function setReplies(/* array(GFGS_Google_CommentReply) */ $replies) {
    $this->assertIsArray($replies, 'GFGS_Google_CommentReply', __METHOD__);
    $this->replies = $replies;
  }
  public function getReplies() {
    return $this->replies;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
}

class GFGS_Google_CommentContext extends GFGS_Google_Model {
  public $type;
  public $value;
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setValue($value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

class GFGS_Google_CommentList extends GFGS_Google_Model {
  protected $__itemsType = 'GFGS_Google_Comment';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setItems(/* array(GFGS_Google_Comment) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_Comment', __METHOD__);
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

class GFGS_Google_CommentReply extends GFGS_Google_Model {
  protected $__authorType = 'GFGS_Google_User';
  protected $__authorDataType = '';
  public $author;
  public $content;
  public $createdDate;
  public $deleted;
  public $htmlContent;
  public $kind;
  public $modifiedDate;
  public $replyId;
  public $verb;
  public function setAuthor(GFGS_Google_User $author) {
    $this->author = $author;
  }
  public function getAuthor() {
    return $this->author;
  }
  public function setContent($content) {
    $this->content = $content;
  }
  public function getContent() {
    return $this->content;
  }
  public function setCreatedDate($createdDate) {
    $this->createdDate = $createdDate;
  }
  public function getCreatedDate() {
    return $this->createdDate;
  }
  public function setDeleted($deleted) {
    $this->deleted = $deleted;
  }
  public function getDeleted() {
    return $this->deleted;
  }
  public function setHtmlContent($htmlContent) {
    $this->htmlContent = $htmlContent;
  }
  public function getHtmlContent() {
    return $this->htmlContent;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setModifiedDate($modifiedDate) {
    $this->modifiedDate = $modifiedDate;
  }
  public function getModifiedDate() {
    return $this->modifiedDate;
  }
  public function setReplyId($replyId) {
    $this->replyId = $replyId;
  }
  public function getReplyId() {
    return $this->replyId;
  }
  public function setVerb($verb) {
    $this->verb = $verb;
  }
  public function getVerb() {
    return $this->verb;
  }
}

class GFGS_Google_CommentReplyList extends GFGS_Google_Model {
  protected $__itemsType = 'GFGS_Google_CommentReply';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setItems(/* array(GFGS_Google_CommentReply) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_CommentReply', __METHOD__);
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

class GFGS_Google_DriveFile extends GFGS_Google_Model {
  public $alternateLink;
  public $createdDate;
  public $description;
  public $downloadUrl;
  public $editable;
  public $embedLink;
  public $etag;
  public $explicitlyTrashed;
  public $exportLinks;
  public $fileExtension;
  public $fileSize;
  public $iconLink;
  public $id;
  protected $__imageMediaMetadataType = 'GFGS_Google_DriveFileImageMediaMetadata';
  protected $__imageMediaMetadataDataType = '';
  public $imageMediaMetadata;
  protected $__indexableTextType = 'GFGS_Google_DriveFileIndexableText';
  protected $__indexableTextDataType = '';
  public $indexableText;
  public $kind;
  protected $__labelsType = 'GFGS_Google_DriveFileLabels';
  protected $__labelsDataType = '';
  public $labels;
  public $lastModifyingUserName;
  public $lastViewedByMeDate;
  public $md5Checksum;
  public $mimeType;
  public $modifiedByMeDate;
  public $modifiedDate;
  public $originalFilename;
  public $ownerNames;
  protected $__parentsType = 'GFGS_Google_ParentReference';
  protected $__parentsDataType = 'array';
  public $parents;
  public $quotaBytesUsed;
  public $selfLink;
  public $sharedWithMeDate;
  protected $__thumbnailType = 'GFGS_Google_DriveFileThumbnail';
  protected $__thumbnailDataType = '';
  public $thumbnail;
  public $thumbnailLink;
  public $title;
  protected $__userPermissionType = 'GFGS_Google_Permission';
  protected $__userPermissionDataType = '';
  public $userPermission;
  public $webContentLink;
  public $webViewLink;
  public $writersCanShare;
  public function setAlternateLink($alternateLink) {
    $this->alternateLink = $alternateLink;
  }
  public function getAlternateLink() {
    return $this->alternateLink;
  }
  public function setCreatedDate($createdDate) {
    $this->createdDate = $createdDate;
  }
  public function getCreatedDate() {
    return $this->createdDate;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setDownloadUrl($downloadUrl) {
    $this->downloadUrl = $downloadUrl;
  }
  public function getDownloadUrl() {
    return $this->downloadUrl;
  }
  public function setEditable($editable) {
    $this->editable = $editable;
  }
  public function getEditable() {
    return $this->editable;
  }
  public function setEmbedLink($embedLink) {
    $this->embedLink = $embedLink;
  }
  public function getEmbedLink() {
    return $this->embedLink;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setExplicitlyTrashed($explicitlyTrashed) {
    $this->explicitlyTrashed = $explicitlyTrashed;
  }
  public function getExplicitlyTrashed() {
    return $this->explicitlyTrashed;
  }
  public function setExportLinks($exportLinks) {
    $this->exportLinks = $exportLinks;
  }
  public function getExportLinks() {
    return $this->exportLinks;
  }
  public function setFileExtension($fileExtension) {
    $this->fileExtension = $fileExtension;
  }
  public function getFileExtension() {
    return $this->fileExtension;
  }
  public function setFileSize($fileSize) {
    $this->fileSize = $fileSize;
  }
  public function getFileSize() {
    return $this->fileSize;
  }
  public function setIconLink($iconLink) {
    $this->iconLink = $iconLink;
  }
  public function getIconLink() {
    return $this->iconLink;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setImageMediaMetadata(GFGS_Google_DriveFileImageMediaMetadata $imageMediaMetadata) {
    $this->imageMediaMetadata = $imageMediaMetadata;
  }
  public function getImageMediaMetadata() {
    return $this->imageMediaMetadata;
  }
  public function setIndexableText(GFGS_Google_DriveFileIndexableText $indexableText) {
    $this->indexableText = $indexableText;
  }
  public function getIndexableText() {
    return $this->indexableText;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLabels(GFGS_Google_DriveFileLabels $labels) {
    $this->labels = $labels;
  }
  public function getLabels() {
    return $this->labels;
  }
  public function setLastModifyingUserName($lastModifyingUserName) {
    $this->lastModifyingUserName = $lastModifyingUserName;
  }
  public function getLastModifyingUserName() {
    return $this->lastModifyingUserName;
  }
  public function setLastViewedByMeDate($lastViewedByMeDate) {
    $this->lastViewedByMeDate = $lastViewedByMeDate;
  }
  public function getLastViewedByMeDate() {
    return $this->lastViewedByMeDate;
  }
  public function setMd5Checksum($md5Checksum) {
    $this->md5Checksum = $md5Checksum;
  }
  public function getMd5Checksum() {
    return $this->md5Checksum;
  }
  public function setMimeType($mimeType) {
    $this->mimeType = $mimeType;
  }
  public function getMimeType() {
    return $this->mimeType;
  }
  public function setModifiedByMeDate($modifiedByMeDate) {
    $this->modifiedByMeDate = $modifiedByMeDate;
  }
  public function getModifiedByMeDate() {
    return $this->modifiedByMeDate;
  }
  public function setModifiedDate($modifiedDate) {
    $this->modifiedDate = $modifiedDate;
  }
  public function getModifiedDate() {
    return $this->modifiedDate;
  }
  public function setOriginalFilename($originalFilename) {
    $this->originalFilename = $originalFilename;
  }
  public function getOriginalFilename() {
    return $this->originalFilename;
  }
  public function setOwnerNames( $ownerNames) {
    $this->ownerNames = $ownerNames;
  }
  public function getOwnerNames() {
    return $this->ownerNames;
  }
  public function setParents(/* array(GFGS_Google_ParentReference) */ $parents) {
    $this->assertIsArray($parents, 'GFGS_Google_ParentReference', __METHOD__);
    $this->parents = $parents;
  }
  public function getParents() {
    return $this->parents;
  }
  public function setQuotaBytesUsed($quotaBytesUsed) {
    $this->quotaBytesUsed = $quotaBytesUsed;
  }
  public function getQuotaBytesUsed() {
    return $this->quotaBytesUsed;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setSharedWithMeDate($sharedWithMeDate) {
    $this->sharedWithMeDate = $sharedWithMeDate;
  }
  public function getSharedWithMeDate() {
    return $this->sharedWithMeDate;
  }
  public function setThumbnail(GFGS_Google_DriveFileThumbnail $thumbnail) {
    $this->thumbnail = $thumbnail;
  }
  public function getThumbnail() {
    return $this->thumbnail;
  }
  public function setThumbnailLink($thumbnailLink) {
    $this->thumbnailLink = $thumbnailLink;
  }
  public function getThumbnailLink() {
    return $this->thumbnailLink;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
  public function setUserPermission(GFGS_Google_Permission $userPermission) {
    $this->userPermission = $userPermission;
  }
  public function getUserPermission() {
    return $this->userPermission;
  }
  public function setWebContentLink($webContentLink) {
    $this->webContentLink = $webContentLink;
  }
  public function getWebContentLink() {
    return $this->webContentLink;
  }
  public function setWebViewLink($webViewLink) {
    $this->webViewLink = $webViewLink;
  }
  public function getWebViewLink() {
    return $this->webViewLink;
  }
  public function setWritersCanShare($writersCanShare) {
    $this->writersCanShare = $writersCanShare;
  }
  public function getWritersCanShare() {
    return $this->writersCanShare;
  }
}

class GFGS_Google_DriveFileImageMediaMetadata extends GFGS_Google_Model {
  public $aperture;
  public $cameraMake;
  public $cameraModel;
  public $colorSpace;
  public $date;
  public $exposureBias;
  public $exposureMode;
  public $exposureTime;
  public $flashUsed;
  public $focalLength;
  public $height;
  public $isoSpeed;
  public $lens;
  protected $__locationType = 'GFGS_Google_DriveFileImageMediaMetadataLocation';
  protected $__locationDataType = '';
  public $location;
  public $maxApertureValue;
  public $meteringMode;
  public $rotation;
  public $sensor;
  public $subjectDistance;
  public $whiteBalance;
  public $width;
  public function setAperture($aperture) {
    $this->aperture = $aperture;
  }
  public function getAperture() {
    return $this->aperture;
  }
  public function setCameraMake($cameraMake) {
    $this->cameraMake = $cameraMake;
  }
  public function getCameraMake() {
    return $this->cameraMake;
  }
  public function setCameraModel($cameraModel) {
    $this->cameraModel = $cameraModel;
  }
  public function getCameraModel() {
    return $this->cameraModel;
  }
  public function setColorSpace($colorSpace) {
    $this->colorSpace = $colorSpace;
  }
  public function getColorSpace() {
    return $this->colorSpace;
  }
  public function setDate($date) {
    $this->date = $date;
  }
  public function getDate() {
    return $this->date;
  }
  public function setExposureBias($exposureBias) {
    $this->exposureBias = $exposureBias;
  }
  public function getExposureBias() {
    return $this->exposureBias;
  }
  public function setExposureMode($exposureMode) {
    $this->exposureMode = $exposureMode;
  }
  public function getExposureMode() {
    return $this->exposureMode;
  }
  public function setExposureTime($exposureTime) {
    $this->exposureTime = $exposureTime;
  }
  public function getExposureTime() {
    return $this->exposureTime;
  }
  public function setFlashUsed($flashUsed) {
    $this->flashUsed = $flashUsed;
  }
  public function getFlashUsed() {
    return $this->flashUsed;
  }
  public function setFocalLength($focalLength) {
    $this->focalLength = $focalLength;
  }
  public function getFocalLength() {
    return $this->focalLength;
  }
  public function setHeight($height) {
    $this->height = $height;
  }
  public function getHeight() {
    return $this->height;
  }
  public function setIsoSpeed($isoSpeed) {
    $this->isoSpeed = $isoSpeed;
  }
  public function getIsoSpeed() {
    return $this->isoSpeed;
  }
  public function setLens($lens) {
    $this->lens = $lens;
  }
  public function getLens() {
    return $this->lens;
  }
  public function setLocation(GFGS_Google_DriveFileImageMediaMetadataLocation $location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
  public function setMaxApertureValue($maxApertureValue) {
    $this->maxApertureValue = $maxApertureValue;
  }
  public function getMaxApertureValue() {
    return $this->maxApertureValue;
  }
  public function setMeteringMode($meteringMode) {
    $this->meteringMode = $meteringMode;
  }
  public function getMeteringMode() {
    return $this->meteringMode;
  }
  public function setRotation($rotation) {
    $this->rotation = $rotation;
  }
  public function getRotation() {
    return $this->rotation;
  }
  public function setSensor($sensor) {
    $this->sensor = $sensor;
  }
  public function getSensor() {
    return $this->sensor;
  }
  public function setSubjectDistance($subjectDistance) {
    $this->subjectDistance = $subjectDistance;
  }
  public function getSubjectDistance() {
    return $this->subjectDistance;
  }
  public function setWhiteBalance($whiteBalance) {
    $this->whiteBalance = $whiteBalance;
  }
  public function getWhiteBalance() {
    return $this->whiteBalance;
  }
  public function setWidth($width) {
    $this->width = $width;
  }
  public function getWidth() {
    return $this->width;
  }
}

class GFGS_Google_DriveFileImageMediaMetadataLocation extends GFGS_Google_Model {
  public $altitude;
  public $latitude;
  public $longitude;
  public function setAltitude($altitude) {
    $this->altitude = $altitude;
  }
  public function getAltitude() {
    return $this->altitude;
  }
  public function setLatitude($latitude) {
    $this->latitude = $latitude;
  }
  public function getLatitude() {
    return $this->latitude;
  }
  public function setLongitude($longitude) {
    $this->longitude = $longitude;
  }
  public function getLongitude() {
    return $this->longitude;
  }
}

class GFGS_Google_DriveFileIndexableText extends GFGS_Google_Model {
  public $text;
  public function setText($text) {
    $this->text = $text;
  }
  public function getText() {
    return $this->text;
  }
}

class GFGS_Google_DriveFileLabels extends GFGS_Google_Model {
  public $hidden;
  public $restricted;
  public $starred;
  public $trashed;
  public $viewed;
  public function setHidden($hidden) {
    $this->hidden = $hidden;
  }
  public function getHidden() {
    return $this->hidden;
  }
  public function setRestricted($restricted) {
    $this->restricted = $restricted;
  }
  public function getRestricted() {
    return $this->restricted;
  }
  public function setStarred($starred) {
    $this->starred = $starred;
  }
  public function getStarred() {
    return $this->starred;
  }
  public function setTrashed($trashed) {
    $this->trashed = $trashed;
  }
  public function getTrashed() {
    return $this->trashed;
  }
  public function setViewed($viewed) {
    $this->viewed = $viewed;
  }
  public function getViewed() {
    return $this->viewed;
  }
}

class GFGS_Google_DriveFileThumbnail extends GFGS_Google_Model {
  public $image;
  public $mimeType;
  public function setImage($image) {
    $this->image = $image;
  }
  public function getImage() {
    return $this->image;
  }
  public function setMimeType($mimeType) {
    $this->mimeType = $mimeType;
  }
  public function getMimeType() {
    return $this->mimeType;
  }
}

class GFGS_Google_FileList extends GFGS_Google_Model {
  public $etag;
  protected $__itemsType = 'GFGS_Google_DriveFile';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextLink;
  public $nextPageToken;
  public $selfLink;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(GFGS_Google_DriveFile) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_DriveFile', __METHOD__);
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
  public function setNextLink($nextLink) {
    $this->nextLink = $nextLink;
  }
  public function getNextLink() {
    return $this->nextLink;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class GFGS_Google_ParentList extends GFGS_Google_Model {
  public $etag;
  protected $__itemsType = 'GFGS_Google_ParentReference';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $selfLink;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(GFGS_Google_ParentReference) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_ParentReference', __METHOD__);
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
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class GFGS_Google_ParentReference extends GFGS_Google_Model {
  public $id;
  public $isRoot;
  public $kind;
  public $parentLink;
  public $selfLink;
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setIsRoot($isRoot) {
    $this->isRoot = $isRoot;
  }
  public function getIsRoot() {
    return $this->isRoot;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setParentLink($parentLink) {
    $this->parentLink = $parentLink;
  }
  public function getParentLink() {
    return $this->parentLink;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class GFGS_Google_Permission extends GFGS_Google_Model {
  public $additionalRoles;
  public $authKey;
  public $etag;
  public $id;
  public $kind;
  public $name;
  public $photoLink;
  public $role;
  public $selfLink;
  public $type;
  public $value;
  public $withLink;
  public function setAdditionalRoles( $additionalRoles) {
    $this->additionalRoles = $additionalRoles;
  }
  public function getAdditionalRoles() {
    return $this->additionalRoles;
  }
  public function setAuthKey($authKey) {
    $this->authKey = $authKey;
  }
  public function getAuthKey() {
    return $this->authKey;
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
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setPhotoLink($photoLink) {
    $this->photoLink = $photoLink;
  }
  public function getPhotoLink() {
    return $this->photoLink;
  }
  public function setRole($role) {
    $this->role = $role;
  }
  public function getRole() {
    return $this->role;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setValue($value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
  public function setWithLink($withLink) {
    $this->withLink = $withLink;
  }
  public function getWithLink() {
    return $this->withLink;
  }
}

class GFGS_Google_PermissionList extends GFGS_Google_Model {
  public $etag;
  protected $__itemsType = 'GFGS_Google_Permission';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $selfLink;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(GFGS_Google_Permission) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_Permission', __METHOD__);
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
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class GFGS_Google_Revision extends GFGS_Google_Model {
  public $downloadUrl;
  public $etag;
  public $exportLinks;
  public $fileSize;
  public $id;
  public $kind;
  public $lastModifyingUserName;
  public $md5Checksum;
  public $mimeType;
  public $modifiedDate;
  public $originalFilename;
  public $pinned;
  public $publishAuto;
  public $published;
  public $publishedLink;
  public $publishedOutsideDomain;
  public $selfLink;
  public function setDownloadUrl($downloadUrl) {
    $this->downloadUrl = $downloadUrl;
  }
  public function getDownloadUrl() {
    return $this->downloadUrl;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setExportLinks($exportLinks) {
    $this->exportLinks = $exportLinks;
  }
  public function getExportLinks() {
    return $this->exportLinks;
  }
  public function setFileSize($fileSize) {
    $this->fileSize = $fileSize;
  }
  public function getFileSize() {
    return $this->fileSize;
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
  public function setLastModifyingUserName($lastModifyingUserName) {
    $this->lastModifyingUserName = $lastModifyingUserName;
  }
  public function getLastModifyingUserName() {
    return $this->lastModifyingUserName;
  }
  public function setMd5Checksum($md5Checksum) {
    $this->md5Checksum = $md5Checksum;
  }
  public function getMd5Checksum() {
    return $this->md5Checksum;
  }
  public function setMimeType($mimeType) {
    $this->mimeType = $mimeType;
  }
  public function getMimeType() {
    return $this->mimeType;
  }
  public function setModifiedDate($modifiedDate) {
    $this->modifiedDate = $modifiedDate;
  }
  public function getModifiedDate() {
    return $this->modifiedDate;
  }
  public function setOriginalFilename($originalFilename) {
    $this->originalFilename = $originalFilename;
  }
  public function getOriginalFilename() {
    return $this->originalFilename;
  }
  public function setPinned($pinned) {
    $this->pinned = $pinned;
  }
  public function getPinned() {
    return $this->pinned;
  }
  public function setPublishAuto($publishAuto) {
    $this->publishAuto = $publishAuto;
  }
  public function getPublishAuto() {
    return $this->publishAuto;
  }
  public function setPublished($published) {
    $this->published = $published;
  }
  public function getPublished() {
    return $this->published;
  }
  public function setPublishedLink($publishedLink) {
    $this->publishedLink = $publishedLink;
  }
  public function getPublishedLink() {
    return $this->publishedLink;
  }
  public function setPublishedOutsideDomain($publishedOutsideDomain) {
    $this->publishedOutsideDomain = $publishedOutsideDomain;
  }
  public function getPublishedOutsideDomain() {
    return $this->publishedOutsideDomain;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class GFGS_Google_RevisionList extends GFGS_Google_Model {
  public $etag;
  protected $__itemsType = 'GFGS_Google_Revision';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $selfLink;
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(GFGS_Google_Revision) */ $items) {
    $this->assertIsArray($items, 'GFGS_Google_Revision', __METHOD__);
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
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class GFGS_Google_User extends GFGS_Google_Model {
  public $displayName;
  public $isAuthenticatedUser;
  public $kind;
  protected $__pictureType = 'GFGS_Google_UserPicture';
  protected $__pictureDataType = '';
  public $picture;
  public function setDisplayName($displayName) {
    $this->displayName = $displayName;
  }
  public function getDisplayName() {
    return $this->displayName;
  }
  public function setIsAuthenticatedUser($isAuthenticatedUser) {
    $this->isAuthenticatedUser = $isAuthenticatedUser;
  }
  public function getIsAuthenticatedUser() {
    return $this->isAuthenticatedUser;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setPicture(GFGS_Google_UserPicture $picture) {
    $this->picture = $picture;
  }
  public function getPicture() {
    return $this->picture;
  }
}

class GFGS_Google_UserPicture extends GFGS_Google_Model {
  public $url;
  public function setUrl($url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
}
