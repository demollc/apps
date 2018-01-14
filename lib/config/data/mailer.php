<?php

return array(
    'id' => 'mailer',
    'hooks' => array(
          'head.blocks' => array(
              'params' => false,
              ),
          'campaign.before_sending' => array(
              'params' => false,
              ),
          'campaign.contacts_prepared' =>  array(
              'params' => true,
          ),
          'campaign.sending' =>  array(
              'params' => true,
          ),
          'campaign.validate' =>  array(
              'params' => true,
          ),
          'campaign.pause' =>  array(
              'params' => true,
          ),
          'campaign.resume' => array(
              'params' => true,
              ),
          'campaign.validate_test' => array(
              'params' => true,
              ),
          'campaign.sending_test' => array(
              'params' => true,
              ),
          'recipients.form'=> array(
              'params' => true,
              ),
          'return_path.check'=> array(
              'params' => true,
              ),
          'recipients.prepare'=> array(
              'params' => true,
              ),
          'sender.transport' =>  array(
              'params' => true,
          ),
          'sidebar.blocks' => array(
              'params' => false,
              ),
          'sender.types' => array(
              'params' => true,
              ),
        )
    );
//public function event($name, &$params = null, $array_keys = null)
// wa-apps/mailer/lib/layouts/mailerBackend.layout.php:wa()->event('head.blocks') as $app_id => $one_or_more_blocks)
// wa-apps/mailer/lib/actions/schedule/mailerScheduleSave.controller.php:wa()->event('campaign.before_sending')
// wa-apps/mailer/lib/actions/backend/mailerBackendSidebar.action.php:wa()->event('sidebar.blocks') as $app_id => $one_or_more_blocks)
// wa-apps/mailer/lib/actions/senders/mailerSendersDialog.action.php:wa()->event('sender.types', $senders)
// wa-apps/mailer/lib/actions/campaigns/mailerCampaignsRecipients.action.php:wa()->event('recipients.form', $params)
// wa-apps/mailer/lib/actions/campaigns/mailerCampaignsPresend.action.php:wa()->event('campaign.validate', $evt_params)
// wa-apps/mailer/lib/actions/campaigns/mailerCampaignsPause.controller.php:wa()->event('campaign.pause', $evt_params)
// wa-apps/mailer/lib/actions/campaigns/mailerCampaignsPause.controller.php:wa()->event('campaign.resume', $evt_params)
// wa-apps/mailer/lib/actions/campaigns/mailerCampaignsSendTest.action.php:wa()->event('campaign.validate_test', $evt_params)
// wa-apps/mailer/lib/actions/campaigns/mailerCampaignsSendTest.action.php:wa()->event('campaign.sending_test', $evt_params)
// wa-apps/mailer/lib/cli/mailerSend.cli.php:wa()->event('campaign.before_sending')
// wa-apps/mailer/lib/classes/mailerChecker.class.php:wa()->event('return_path.check', $evt_params)
// wa-apps/mailer/lib/classes/mailerSimpleMessage.class.php:wa()->event('sender.transport', $params)
// wa-apps/mailer/lib/classes/mailerHelper.class.php:wa()->event('campaign.contacts_prepared', $evt_params)
// wa-apps/mailer/lib/classes/mailerHelper.class.php:wa()->event('recipients.prepare', $params)
// wa-apps/mailer/lib/classes/mailerMessage.class.php:wa()->event('campaign.before_sending')
// wa-apps/mailer/lib/classes/mailerMessage.class.php:wa()->event('campaign.sending', $evt_params)
