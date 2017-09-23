<?php

class appsCrmInvoice_actionsHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('crm.invoice_actions', $params, $array_keys);
        return ifempty($event);
    }
}
