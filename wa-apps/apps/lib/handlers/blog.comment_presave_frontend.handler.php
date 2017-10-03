<?php

class appsBlogComment_presave_frontendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('blog.comment_presave_frontend', $params, $array_keys);
        return ifempty($event);
    }
}
