<?php
class appsBlogFrontend_postHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = array("footer"))
    {
        $hook = array(
            'app' => 'blog',
            'hook' => 'frontend_post',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
