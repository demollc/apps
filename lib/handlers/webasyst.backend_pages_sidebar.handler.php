<?php
class appsWebasystBackend_pages_sidebarHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = null)
    {
        $hook = array(
            'app' => 'webasyst',
            'hook' => 'backend_pages_sidebar',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
