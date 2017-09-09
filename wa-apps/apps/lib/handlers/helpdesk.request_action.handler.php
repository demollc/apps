<?php

class appsHelpdeskRequest_actionHandler extends waEventHandler
{
    public function execute(&$params = null){
        wa("apps")->event('helpdesk.request_action', $params);
    }
}