<?php

class appsHelpdeskAction_editorHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('helpdesk.action_editor', $params, $array_keys);
    }
}
