<?php

class appsBlogRightsconfigHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('blog.rights.config', $params, $array_keys);
        return ifempty($event);
    }
}
