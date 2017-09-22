<?php

class appsWebasystSignupHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('webasyst.signup', $params, $array_keys);
    }
}
