<?php

class appsCrmInvoice_infoHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('crm.invoice_info', $params, $array_keys);
        return ifempty($event);
    }
}
