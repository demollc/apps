<?php

class appsHelpdeskPage_saveHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('helpdesk.page_save', $params, $array_keys);
        return ifempty($event);
    }
}
