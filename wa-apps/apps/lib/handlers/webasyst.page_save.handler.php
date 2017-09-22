<?php

class appsWebasystPage_saveHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('webasyst.page_save', $params, $array_keys);
    }
}
