<?php

class appsBlogComment_deleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('blog.comment_delete', $params, $array_keys);
    }
}
