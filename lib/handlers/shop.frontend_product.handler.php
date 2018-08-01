<?php
class appsShopFrontend_productHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = array("menu", "cart", "block_aux", "block"))
    {
        $hook = array(
            'app' => 'shop',
            'hook' => 'frontend_product',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
