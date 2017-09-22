<?php

class appsBlogReminder_saveHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('blog.reminder_save', $params, $array_keys);
    }
}
