<?php

class appsShopBackend_orderHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array (
  0 => 'title_suffix',
  1 => 'action_button',
  2 => 'action_link',
  3 => 'info_section',
)){
        return wa('apps')->event('shop.backend_order', $params, $array_keys);
    }
}
