<?php

class appsHubFrontend_topic_editHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array("top_block", "bottom_block"))
    {
        $event = wa('apps')->event('hub.frontend_topic_edit', $params, $array_keys);
        return ifempty($event);
    }
}
