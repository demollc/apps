<?php
class appsCrmDeal_stage_overdueHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = null)
    {
        $hook = array(
            'app' => 'crm',
            'hook' => 'deal_stage_overdue',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
