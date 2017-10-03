<?php

class appsCrmInvoice_refundHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('crm.invoice_refund', $params, $array_keys);
        return ifempty($event);
    }
}
