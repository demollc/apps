<?php

class appsFilesBackend_storageHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('files.backend_storage', $params, $array_keys);
        return ifempty($event);
    }
}
