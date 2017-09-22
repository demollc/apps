<?php

class appsWebasystProfiletabHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('webasyst.profile.tab', $params, $array_keys);
    }
}
