<?php
class appsBlogBackend_streamHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = array("menu"))
    {
        $hook = array(
            'app' => 'blog',
            'hook' => 'backend_stream',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
