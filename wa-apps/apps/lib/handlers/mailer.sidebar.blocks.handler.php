<?php

class appsMailerSidebarblocksHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('mailer.sidebar.blocks', $params, $array_keys);
    }
}
