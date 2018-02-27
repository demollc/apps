<?php
class appsContactsBackend_last_view_contextHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = null)
    {
        $hook = array(
            'app' => 'contacts',
            'hook' => 'backend_last_view_context',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
