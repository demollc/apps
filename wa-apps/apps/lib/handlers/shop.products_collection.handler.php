<?php

class appsShopProducts_collectionHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.products_collection', $params, $array_keys);
        return ifempty($event);
    }
}
