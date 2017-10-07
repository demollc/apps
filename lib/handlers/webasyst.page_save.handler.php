<?php

class appsWebasystPage_saveHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('webasyst.page_save', $params, $array_keys);
        return ifempty($event);
    }
}
