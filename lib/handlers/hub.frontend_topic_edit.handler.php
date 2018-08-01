<?php
class appsHubFrontend_topic_editHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = array("top_block", "bottom_block"))
    {
        $hook = array(
            'app' => 'hub',
            'hook' => 'frontend_topic_edit',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
