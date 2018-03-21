<?php
class appsCrmBackend_invoiceHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = array("title_suffix", "action_button", "action_link", "info_section"))
    {
        $hook = array(
            'app' => 'crm',
            'hook' => 'backend_invoice',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
