<?php

class appsHubFrontend_topicHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array("title_suffix", "body", "comments"))
    {
        $event = wa('apps')->event('hub.frontend_topic', $params, $array_keys);
        return ifempty($event);
    }
}
