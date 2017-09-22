<?php

class appsShopFollowup_deleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.followup_delete', $params, $array_keys);
    }
}
