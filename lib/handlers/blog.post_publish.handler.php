<?php

class appsBlogPost_publishHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('blog.post_publish', $params, $array_keys);
        return ifempty($event);
    }
}
