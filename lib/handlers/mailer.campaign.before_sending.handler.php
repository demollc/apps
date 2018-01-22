<?php
class appsMailerCampaignbefore_sendingHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = null)
    {
        $hook = array(
            'app' => 'mailer',
            'hook' => 'campaign.before_sending',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
