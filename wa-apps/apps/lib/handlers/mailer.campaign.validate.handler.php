<?php

class appsMailerCampaignvalidateHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('mailer.campaign.validate', $params, $array_keys);
    }
}
