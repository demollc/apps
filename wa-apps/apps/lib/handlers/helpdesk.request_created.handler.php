<?php

class appsHelpdeskRequest_createdHandler extends waEventHandler
{
    public function execute(&$params = null){
        wa("apps")->event('helpdesk.request_created', $params);
    }
}