<?php

class appsHelpdeskView_workflow_actionHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('helpdesk.view_workflow_action', $params, $array_keys);
    }
}
