<?php

class appsTeamBackend_schedule_settingsHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('team.backend_schedule_settings', $params, $array_keys);
    }
}
