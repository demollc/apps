<?php

class appsBlogFollowup_sendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('blog.followup_send', $params, $array_keys);
        return ifempty($event);
    }
}
