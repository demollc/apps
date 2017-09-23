<?php

class appsSiteDomain_deleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('site.domain_delete', $params, $array_keys);
        return ifempty($event);
    }
}
