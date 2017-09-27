<?php

class appsBlogPost_saveHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('blog.post_save', $params, $array_keys);
        return ifempty($event);
    }
}
