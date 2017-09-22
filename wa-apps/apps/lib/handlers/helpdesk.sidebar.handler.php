<?php

class appsHelpdeskSidebarHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('helpdesk.sidebar', $params, $array_keys);
    }
}
