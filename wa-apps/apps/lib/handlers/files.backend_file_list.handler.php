<?php

class appsFilesBackend_file_listHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('files.backend_file_list', $params, $array_keys);
    }
}
