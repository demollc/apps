<?php

class appsShopCategory_deleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('shop.category_delete', $params, $array_keys);
    }
}
