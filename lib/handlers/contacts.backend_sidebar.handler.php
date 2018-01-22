<?php
class appsContactsBackend_sidebarHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = array("top_li"))
    {
        $hook = array(
            'app' => 'contacts',
            'hook' => 'backend_sidebar',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
