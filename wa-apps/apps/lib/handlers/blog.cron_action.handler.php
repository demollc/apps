<?php

class appsBlogCron_actionHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('blog.cron_action', $params, $array_keys);
    }
}
