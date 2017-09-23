<?php

class appsBlogPrepare_comments_backendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('blog.prepare_comments_backend', $params, $array_keys);
        return ifempty($event);
    }
}
