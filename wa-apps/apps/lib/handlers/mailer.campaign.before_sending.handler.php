<?php

class appsMailerCampaignbefore_sendingHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('mailer.campaign.before_sending', $params, $array_keys);
    }
}
