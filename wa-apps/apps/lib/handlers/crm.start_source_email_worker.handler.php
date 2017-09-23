<?php

class appsCrmStart_source_email_workerHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('crm.start_source_email_worker', $params, $array_keys);
        return ifempty($event);
    }
}
