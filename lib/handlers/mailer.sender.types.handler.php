<?php

class appsMailerSendertypesHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('mailer.sender.types', $params, $array_keys);
        return ifempty($event);
    }
}
