<?php

class appsTeamRouting_backendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('team.routing_backend', $params, $array_keys);
        return ifempty($event);
    }
}
