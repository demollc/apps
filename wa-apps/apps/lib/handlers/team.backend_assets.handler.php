<?php

class appsTeamBackend_assetsHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('team.backend_assets', $params, $array_keys);
    }
}
