<?php

class appsShopBackend_orderHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array("title_suffix", "action_button", "action_link", "info_section"))
    {
        $event = wa('apps')->event('shop.backend_order', $params, $array_keys);
        return ifempty($event);
    }
}
