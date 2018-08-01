<?php
class appsSiteBackend_settingsHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = array("action_button_li", "section"))
    {
        $hook = array(
            'app' => 'site',
            'hook' => 'backend_settings',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
