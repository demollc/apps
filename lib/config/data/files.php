<?php

return array(
    'id' => 'files',
    'hooks' => array(
    //files 1.1.2 99
          'backend_layout' => array(
              'params' => true,
              ),
          'start_copy_tasks' => array(
              'params' => false,
              ),
          'start_sync_tasks' => array(
              'params' => false,
              ),
          'backend_file_list' => array(
              'params' => true,
              ),
          'backend_file' => array(
              'params' => true,
              ),
          'backend_folder' => array(
              'params' => true,
              ),
          'backend_sidebar' => array(
              'params' => false,
              ),
          'backend_storage' => array(
              'params' => true,
              ),
          'collection' => array(
              'params' => true,
              ),
          'extra_prepare_collection' => array(
              'params' => true,
              ),
          'file_delete' => array(
              'params' => true,
              ),
          'file_move_to_trash' => array(
              'params' => true,
              ),
          'file_upload' => array(
              'params' => true,
              ),
          'files_frontend_request' => array(
              'params' => false,
              ),
          'rights.config' => array(
              'params' => true,
              ),
          //wa()->event(array($this->application, 'routing'), $route);
        ),
    );
//public function event($name, &$params = null, $array_keys = null)
// wa-apps/files/lib/cli/filesSync.cli.php:wa('files')->event('start_sync_tasks')
// wa-apps/files/lib/config/filesRightConfig.class.php:wa()->event('rights.config', $this)
// wa-apps/files/lib/config/filesConfig.class.php:wa()->event(array($this->application, 'routing'), $route)
// wa-apps/files/lib/classes/filesCopytask.class.php:wa('files')->event('start_copy_tasks')
// wa-apps/files/lib/classes/filesCollection.class.php:wa()->event('collection', $params)
// wa-apps/files/lib/classes/filesCollection.class.php:wa()->event('extra_prepare_collection', $params)
// wa-apps/files/lib/classes/filesFilesAction.class.php:wa()->event('backend_file_list', $params))
// wa-apps/files/lib/actions/backend/filesBackendSidebar.action.php:wa()->event('backend_sidebar'))
// wa-apps/files/lib/actions/frontend/filesFrontend.action.php:wa()->event('files_frontend_request')
// wa-apps/files/lib/actions/file/filesFile.action.php:wa()->event('backend_file', $event_params)
// wa-apps/files/lib/actions/upload/filesUploadFiles.controller.php:wa()->event('file_upload', $f)
// wa-apps/files/lib/actions/storage/filesStorageFiles.action.php:wa()->event('backend_storage', $params)
// wa-apps/files/lib/actions/delete/filesDeleteFiles.controller.php:wa()->event('file_move_to_trash', $id)
// wa-apps/files/lib/actions/delete/filesDeleteFiles.controller.php:wa()->event('file_delete', $id)
// wa-apps/files/lib/actions/folder/filesFolderFiles.action.php:wa()->event('backend_folder', $params)
// wa-apps/files/lib/layouts/filesDefault.layout.php:wa('files')->event('backend_layout', $params)
