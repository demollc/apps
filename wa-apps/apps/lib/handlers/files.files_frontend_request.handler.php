<?php

class appsFilesFiles_frontend_requestHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('files.files_frontend_request', $params, $array_keys);
    }
}
