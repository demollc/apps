<?php
class appsBlogBackend_sidebarHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = array("menu", "section", "system"))
    {
        $hook = array(
            'app' => 'blog',
            'hook' => 'backend_sidebar',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
