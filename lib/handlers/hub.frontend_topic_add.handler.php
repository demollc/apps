<?php
class appsHubFrontend_topic_addHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = array("top_block", "bottom_block"))
    {
        $hook = array(
            'app' => 'hub',
            'hook' => 'frontend_topic_add',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
