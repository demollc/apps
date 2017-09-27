<?php

class appsBlogPage_editHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('blog.page_edit', $params, $array_keys);
        return ifempty($event);
    }
}
