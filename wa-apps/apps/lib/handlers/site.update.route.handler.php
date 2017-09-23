<?php

class appsSiteUpdaterouteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('site.update.route', $params, $array_keys);
        return ifempty($event);
    }
}
