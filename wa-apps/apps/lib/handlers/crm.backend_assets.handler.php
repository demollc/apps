<?php

class appsCrmBackend_assetsHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('crm.backend_assets', $params, $array_keys);
    }
}
