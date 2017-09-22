<?php

class appsShopCategory_saveHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.category_save', $params, $array_keys);
    }
}
