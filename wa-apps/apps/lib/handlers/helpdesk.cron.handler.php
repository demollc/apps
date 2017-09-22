<?php

class appsHelpdeskCronHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('helpdesk.cron', $params, $array_keys);
    }
}
