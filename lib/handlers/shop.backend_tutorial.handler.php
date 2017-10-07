<?php

class appsShopBackend_tutorialHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.backend_tutorial', $params, $array_keys);
        return ifempty($event);
    }
}
