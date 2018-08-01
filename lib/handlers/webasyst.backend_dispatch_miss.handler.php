<?php
class appsWebasystBackend_dispatch_missHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = null)
    {
        $hook = array(
            'app' => 'webasyst',
            'hook' => 'backend_dispatch_miss',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
