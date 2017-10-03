<?php

class appsBlogBackend_post_editHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array("sidebar", "toolbar", "editor_tab"))
    {
        $event = wa('apps')->event('blog.backend_post_edit', $params, $array_keys);
        return ifempty($event);
    }
}
