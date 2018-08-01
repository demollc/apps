<?php
class appsBlogCron_actionHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = null)
    {
        $hook = array(
            'app' => 'blog',
            'hook' => 'cron_action',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
