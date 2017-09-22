<?php

class appsMailerCampaignresumeHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('mailer.campaign.resume', $params, $array_keys);
    }
}
