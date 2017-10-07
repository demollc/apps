<?php

class appsShopSitemapHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('shop.sitemap', $params, $array_keys);
        return ifempty($event);
    }
}
