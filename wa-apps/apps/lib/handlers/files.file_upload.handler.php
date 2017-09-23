<?php

class appsFilesFile_uploadHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('files.file_upload', $params, $array_keys);
        return ifempty($event);
    }
}
