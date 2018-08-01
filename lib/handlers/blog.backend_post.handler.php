<?php
class appsBlogBackend_postHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = array("footer"))
    {
        $hook = array(
            'app' => 'blog',
            'hook' => 'backend_post',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
