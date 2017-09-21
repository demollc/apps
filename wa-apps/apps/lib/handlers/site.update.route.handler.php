<?php

class appsSiteUpdaterouteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('site.update.route', $params, $array_keys);
    }
}
