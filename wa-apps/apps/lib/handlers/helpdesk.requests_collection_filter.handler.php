<?php

class appsHelpdeskRequests_collection_filterHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('helpdesk.requests_collection_filter', $params, $array_keys);
    }
}
