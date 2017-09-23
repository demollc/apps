<?php

class appsHelpdeskWorkflow_action_presend_messagesHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('helpdesk.workflow_action_presend_messages', $params, $array_keys);
        return ifempty($event);
    }
}
