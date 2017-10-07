<?php

class appsMailerReturn_pathcheckHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('mailer.return_path.check', $params, $array_keys);
        return ifempty($event);
    }
}
