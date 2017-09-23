<?php

class appsBlogPost_presheduleHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('blog.post_preshedule', $params, $array_keys);
        return ifempty($event);
    }
}
