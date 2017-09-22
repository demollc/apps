<?php

class appsHelpdeskSource_editorHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('helpdesk.source_editor', $params, $array_keys);
    }
}
