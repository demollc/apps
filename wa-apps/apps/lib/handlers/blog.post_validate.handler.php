<?php

class appsBlogPost_validateHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('blog.post_validate', $params, $array_keys);
    }
}
