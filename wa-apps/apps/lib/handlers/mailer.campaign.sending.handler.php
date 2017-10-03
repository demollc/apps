<?php

class appsMailerCampaignsendingHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('mailer.campaign.sending', $params, $array_keys);
        return ifempty($event);
    }
}
