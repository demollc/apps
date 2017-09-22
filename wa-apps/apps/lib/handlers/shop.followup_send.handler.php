<?php

class appsShopFollowup_sendHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.followup_send', $params, $array_keys);
    }
}
