<?php

class appsShopBackend_followup_editHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.backend_followup_edit', $params, $array_keys);
        return ifempty($event);
    }
}
