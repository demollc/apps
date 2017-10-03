<?php

class appsBlogBackend_commentsHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array("toolbar"))
    {
        $event = wa('apps')->event('blog.backend_comments', $params, $array_keys);
        return ifempty($event);
    }
}
