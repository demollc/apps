<?php
class appsBlogBackend_post_editHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = array("sidebar", "toolbar", "editor_tab"))
    {
        $hook = array(
            'app' => 'blog',
            'hook' => 'backend_post_edit',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
