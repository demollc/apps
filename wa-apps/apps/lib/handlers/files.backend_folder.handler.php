<?php

class appsFilesBackend_folderHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('files.backend_folder', $params, $array_keys);
        return ifempty($event);
    }
}
