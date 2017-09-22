<?php

class appsCrmInvoice_paidHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('crm.invoice_paid', $params, $array_keys);
    }
}
