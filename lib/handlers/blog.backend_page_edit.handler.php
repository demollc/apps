<?php

class appsBlogBackend_page_editHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array("action_button_li", "section", "settings_section"))
    {
        $event = wa('apps')->event('blog.backend_page_edit', $params, $array_keys);
        return ifempty($event);
    }
}
