<?php

class appsHelpdeskInstalledHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('helpdesk.installed', $params, $array_keys);
    }
}
