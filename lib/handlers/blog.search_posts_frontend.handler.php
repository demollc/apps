<?php
class appsBlogSearch_posts_frontendHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = null)
    {
        $hook = array(
            'app' => 'blog',
            'hook' => 'search_posts_frontend',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        if ($event) return $event;
    }
}
