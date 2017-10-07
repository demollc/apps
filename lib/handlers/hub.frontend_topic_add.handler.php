<?php

class appsHubFrontend_topic_addHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array("top_block", "bottom_block"))
    {
        $event = wa('apps')->event('hub.frontend_topic_add', $params, $array_keys);
        return ifempty($event);
    }
}
