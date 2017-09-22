<?php

class appsFilesExtra_prepare_collectionHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('files.extra_prepare_collection', $params, $array_keys);
    }
}
