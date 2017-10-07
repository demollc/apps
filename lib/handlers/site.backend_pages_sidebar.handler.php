<?php

class appsSiteBackend_pages_sidebarHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('site.backend_pages_sidebar', $params, $array_keys);
        return ifempty($event);
    }
}
