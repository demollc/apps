<?php

class appsSiteDomain_saveHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('site.domain_save', $params, $array_keys);
    }
}
