<?php
class appsHubFrontend_topicHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = array("title_suffix", "body", "comments"))
    {
        $hook = array(
            'app' => 'hub',
            'hook' => 'frontend_topic',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
