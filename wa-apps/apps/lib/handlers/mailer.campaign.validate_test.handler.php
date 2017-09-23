<?php

class appsMailerCampaignvalidate_testHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('mailer.campaign.validate_test', $params, $array_keys);
        return ifempty($event);
    }
}
