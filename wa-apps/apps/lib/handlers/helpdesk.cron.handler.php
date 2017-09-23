<?php

class appsHelpdeskCronHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('helpdesk.cron', $params, $array_keys);
        return ifempty($event);
    }
}
