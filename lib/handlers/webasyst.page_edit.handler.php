<?php

class appsWebasystPage_editHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null)
    {
        $event = wa('apps')->event('webasyst.page_edit', $params, $array_keys);
        return ifempty($event);
    }
}
