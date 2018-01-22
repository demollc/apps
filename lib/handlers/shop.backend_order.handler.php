<?php
class appsShopBackend_orderHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = array("title_suffix", "action_button", "action_link", "info_section"))
    {
        $hook = array(
            'app' => 'shop',
            'hook' => 'backend_order',
            'params' => $params,
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
