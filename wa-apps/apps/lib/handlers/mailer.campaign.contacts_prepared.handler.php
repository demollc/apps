<?php

class appsMailerCampaigncontacts_preparedHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('mailer.campaign.contacts_prepared', $params, $array_keys);
    }
}
