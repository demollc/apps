<?php

class appsMailerCampaigncontacts_preparedHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('mailer.campaign.contacts_prepared', $params, $array_keys);
        return ifempty($event);
    }
}
