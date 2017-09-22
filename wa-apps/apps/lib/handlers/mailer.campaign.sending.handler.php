<?php

class appsMailerCampaignsendingHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('mailer.campaign.sending', $params, $array_keys);
    }
}
