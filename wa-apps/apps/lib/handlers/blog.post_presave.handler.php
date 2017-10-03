<?php

class appsBlogPost_presaveHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('blog.post_presave', $params, $array_keys);
        return ifempty($event);
    }
}
