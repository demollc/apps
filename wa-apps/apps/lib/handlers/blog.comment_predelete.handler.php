<?php

class appsBlogComment_predeleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('blog.comment_predelete', $params, $array_keys);
        return ifempty($event);
    }
}
