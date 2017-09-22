<?php

class appsWebasystBackend_personal_profileHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('webasyst.backend_personal_profile', $params, $array_keys);
    }
}
