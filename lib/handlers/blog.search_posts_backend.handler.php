<?php
class appsBlogSearch_posts_backendHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = null)
    {
        $hook = array(
            'app' => 'blog',
            'hook' => 'search_posts_backend',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        if ($event) return $event;
    }
}
