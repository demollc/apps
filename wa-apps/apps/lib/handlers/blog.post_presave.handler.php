<?php

class appsBlogPost_presaveHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('blog.post_presave', $params, $array_keys);
    }
}
