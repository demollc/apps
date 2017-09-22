<?php

class appsTeamRightsconfigHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('team.rights.config', $params, $array_keys);
    }
}
