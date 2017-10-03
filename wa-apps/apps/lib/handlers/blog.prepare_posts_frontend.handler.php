<?php

class appsBlogPrepare_posts_frontendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('blog.prepare_posts_frontend', $params, $array_keys);
        return ifempty($event);
    }
}
