<?php

class appsFilesBackend_layoutHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('files.backend_layout', $params, $array_keys);
        return ifempty($event);
    }
}
