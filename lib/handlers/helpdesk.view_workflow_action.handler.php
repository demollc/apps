<?php
class appsHelpdeskView_workflow_actionHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = null)
    {
        $hook = array(
            'app' => 'helpdesk',
            'hook' => 'view_workflow_action',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
