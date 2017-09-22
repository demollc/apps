<?php

class appsMailerSendertransportHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('mailer.sender.transport', $params, $array_keys);
    }
}
