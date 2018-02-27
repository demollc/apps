<?php
class appsBlogBackend_commentsHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = array("toolbar"))
    {
        $hook = array(
            'app' => 'blog',
            'hook' => 'backend_comments',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
