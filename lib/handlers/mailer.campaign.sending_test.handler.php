<?php

class appsMailerCampaignsending_testHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('mailer.campaign.sending_test', $params, $array_keys);
        return ifempty($event);
    }
}
