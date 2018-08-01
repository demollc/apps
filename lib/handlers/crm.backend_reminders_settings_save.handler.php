<?php
class appsCrmBackend_reminders_settings_saveHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = null)
    {
        $hook = array(
            'app' => 'crm',
            'hook' => 'backend_reminders_settings_save',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
