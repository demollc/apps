<?php

class appsWebasystPage_deleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('webasyst.page_delete', $params, $array_keys);
        return ifempty($event);
    }
}
