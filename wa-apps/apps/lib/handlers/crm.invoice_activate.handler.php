<?php

class appsCrmInvoice_activateHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('crm.invoice_activate', $params, $array_keys);
        return ifempty($event);
    }
}
