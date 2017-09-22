<?php

class appsBlogPost_deleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('blog.post_delete', $params, $array_keys);
    }
}
