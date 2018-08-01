<?php
class appsHelpdeskInstalledHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = null)
    {
        $hook = array(
            'app' => 'helpdesk',
            'hook' => 'installed',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
