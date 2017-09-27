<?php

class appsBlogPost_sheduleHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('blog.post_shedule', $params, $array_keys);
        return ifempty($event);
    }
}
