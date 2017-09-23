<?php

class appsBlogComment_validateHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('blog.comment_validate', $params, $array_keys);
        return ifempty($event);
    }
}
