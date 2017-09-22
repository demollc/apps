<?php

class appsMailerHeadblocksHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('mailer.head.blocks', $params, $array_keys);
    }
}
