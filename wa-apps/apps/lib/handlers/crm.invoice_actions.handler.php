<?php

class appsCrmInvoice_actionsHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('crm.invoice_actions', $params, $array_keys);
    }
}
