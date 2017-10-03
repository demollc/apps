<?php

class appsCrmPbx_numbers_assignedHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('crm.pbx_numbers_assigned', $params, $array_keys);
        return ifempty($event);
    }
}
