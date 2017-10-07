<?php

class appsMailerRecipientsformHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('mailer.recipients.form', $params, $array_keys);
        return ifempty($event);
    }
}
