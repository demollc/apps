<?php
class appsBlogPrepare_blogs_frontendHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = null)
    {
        $hook = array(
            'app' => 'blog',
            'hook' => 'prepare_blogs_frontend',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
