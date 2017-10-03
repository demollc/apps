<?php

class appsMailerCampaignresumeHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('mailer.campaign.resume', $params, $array_keys);
        return ifempty($event);
    }
}
