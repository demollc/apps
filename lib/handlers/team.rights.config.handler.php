<?php

class appsTeamRightsconfigHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('team.rights.config', $params, $array_keys);
        return ifempty($event);
    }
}
