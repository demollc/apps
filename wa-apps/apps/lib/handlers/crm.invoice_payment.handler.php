<?php

class appsCrmInvoice_paymentHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('crm.invoice_payment', $params, $array_keys);
        return ifempty($event);
    }
}
