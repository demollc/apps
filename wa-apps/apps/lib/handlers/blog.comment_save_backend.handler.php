<?php

class appsBlogComment_save_backendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('blog.comment_save_backend', $params, $array_keys);
    }
}
