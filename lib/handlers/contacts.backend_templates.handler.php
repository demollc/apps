<?php
class appsContactsBackend_templatesHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = null)
    {
        $hook = array(
            'app' => 'contacts',
            'hook' => 'backend_templates',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
