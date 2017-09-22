<?php

class appsBlogPost_predeleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('blog.post_predelete', $params, $array_keys);
    }
}
