<?php

class appsShopCategory_saveHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.category_save', $params, $array_keys);
        return ifempty($event);
    }
}
