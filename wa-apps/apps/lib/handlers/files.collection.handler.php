<?php

class appsFilesCollectionHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('files.collection', $params, $array_keys);
    }
}
