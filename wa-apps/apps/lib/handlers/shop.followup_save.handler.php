<?php

class appsShopFollowup_saveHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.followup_save', $params, $array_keys);
    }
}
