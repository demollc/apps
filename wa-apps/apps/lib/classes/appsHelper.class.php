<?php

class appsHelper extends waAppConfig
{
    public static function generateHandlers(){
        $handlers = include_once(wa('apps')->getAppPath('lib/config/handlers.php'));
        return $handlers;
    }
}