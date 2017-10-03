<?php

class appsHelpdeskView_actionHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('helpdesk.view_action', $params, $array_keys);
        return ifempty($event);
    }
}
