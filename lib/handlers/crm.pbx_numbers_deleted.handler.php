<?php
class appsCrmPbx_numbers_deletedHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = null)
    {
        $hook = array(
            'app' => 'crm',
            'hook' => 'pbx_numbers_deleted',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
