<?php

class appsBlogFrontend_action_defaultHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array("nav_before", "footer", "head", "sidebar"))
    {
        $event = wa('apps')->event('blog.frontend_action_default', $params, $array_keys);
        return ifempty($event);
    }
}
