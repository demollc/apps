<?php

class appsTeamRouting_backendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('team.routing_backend', $params, $array_keys);
    }
}
