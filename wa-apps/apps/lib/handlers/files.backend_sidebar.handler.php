<?php

class appsFilesBackend_sidebarHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('files.backend_sidebar', $params, $array_keys);
    }
}
