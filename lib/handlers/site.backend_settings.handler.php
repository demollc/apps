<?php

class appsSiteBackend_settingsHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = array("action_button_li", "section"))
    {
        $event = wa('apps')->event('site.backend_settings', $params, $array_keys);
        return ifempty($event);
    }
}
