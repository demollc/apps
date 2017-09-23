<?php

class appsCrmStart_notification_birthday_workerHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('crm.start_notification_birthday_worker', $params, $array_keys);
        return ifempty($event);
    }
}
