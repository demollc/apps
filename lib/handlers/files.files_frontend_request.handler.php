<?php

class appsFilesFiles_frontend_requestHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('files.files_frontend_request', $params, $array_keys);
        return ifempty($event);
    }
}
