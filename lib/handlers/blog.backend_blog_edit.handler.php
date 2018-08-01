<?php
class appsBlogBackend_blog_editHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = array("settings"))
    {
        $hook = array(
            'app' => 'blog',
            'hook' => 'backend_blog_edit',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
