<?php

class appsCrmStart_notification_birthday_workerHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('crm.start_notification_birthday_worker', $params, $array_keys);
    }
}
