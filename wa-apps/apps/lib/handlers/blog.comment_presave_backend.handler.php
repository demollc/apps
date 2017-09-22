<?php

class appsBlogComment_presave_backendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('blog.comment_presave_backend', $params, $array_keys);
    }
}
