<?php
class appsBlogRoutingHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = null)
    {
        $hook = array(
            'app' => 'blog',
            'hook' => 'routing',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        if ($event) return $event;
    }
}
