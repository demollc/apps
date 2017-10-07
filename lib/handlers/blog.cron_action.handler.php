<?php

class appsBlogCron_actionHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('blog.cron_action', $params, $array_keys);
        return ifempty($event);
    }
}
