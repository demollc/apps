<?php

class appsBlogPrepare_comments_frontendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('blog.prepare_comments_frontend', $params, $array_keys);
    }
}
