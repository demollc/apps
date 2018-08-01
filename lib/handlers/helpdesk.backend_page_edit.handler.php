<?php
class appsHelpdeskBackend_page_editHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = array("action_button_li", "section", "settings_section"))
    {
        $hook = array(
            'app' => 'helpdesk',
            'hook' => 'backend_page_edit',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
