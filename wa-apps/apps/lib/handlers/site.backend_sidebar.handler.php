<?php

class appsSiteBackend_sidebarHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('site.backend_sidebar', $params, $array_keys);
    }
}
