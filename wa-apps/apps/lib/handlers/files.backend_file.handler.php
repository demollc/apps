<?php

class appsFilesBackend_fileHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('files.backend_file', $params, $array_keys);
        return ifempty($event);
    }
}
