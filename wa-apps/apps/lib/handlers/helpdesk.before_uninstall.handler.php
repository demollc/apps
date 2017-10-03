<?php

class appsHelpdeskBefore_uninstallHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('helpdesk.before_uninstall', $params, $array_keys);
        return ifempty($event);
    }
}
