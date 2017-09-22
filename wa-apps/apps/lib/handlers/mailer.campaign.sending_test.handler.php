<?php

class appsMailerCampaignsending_testHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('mailer.campaign.sending_test', $params, $array_keys);
    }
}
