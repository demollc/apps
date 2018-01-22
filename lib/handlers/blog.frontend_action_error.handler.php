<?php
class appsBlogFrontend_action_errorHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = array("nav_before", "footer", "head", "sidebar"))
    {
        $hook = array(
            'app' => 'blog',
            'hook' => 'frontend_action_error',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
