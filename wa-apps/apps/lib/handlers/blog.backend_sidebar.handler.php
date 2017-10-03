<?php

class appsBlogBackend_sidebarHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array("menu", "section", "system"))
    {
        $event = wa('apps')->event('blog.backend_sidebar', $params, $array_keys);
        return ifempty($event);
    }
}
