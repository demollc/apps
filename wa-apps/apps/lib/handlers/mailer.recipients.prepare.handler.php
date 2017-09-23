<?php

class appsMailerRecipientsprepareHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('mailer.recipients.prepare', $params, $array_keys);
        return ifempty($event);
    }
}
