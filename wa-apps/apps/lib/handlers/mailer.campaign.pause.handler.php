<?php

class appsMailerCampaignpauseHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('mailer.campaign.pause', $params, $array_keys);
    }
}
