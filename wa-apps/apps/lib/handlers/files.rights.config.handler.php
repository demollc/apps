<?php

class appsFilesRightsconfigHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('files.rights.config', $params, $array_keys);
    }
}
