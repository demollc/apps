<?php

class appsShopBackend_reports_channelsHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.backend_reports_channels', $params, $array_keys);
    }
}
