<?php

class appsShopBackend_notification_editHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.backend_notification_edit', $params, $array_keys);
        return ifempty($event);
    }
}
