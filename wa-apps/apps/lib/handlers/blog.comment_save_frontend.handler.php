<?php

class appsBlogComment_save_frontendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('blog.comment_save_frontend', $params, $array_keys);
        return ifempty($event);
    }
}
