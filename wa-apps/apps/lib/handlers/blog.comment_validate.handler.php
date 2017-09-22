<?php

class appsBlogComment_validateHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('blog.comment_validate', $params, $array_keys);
    }
}
