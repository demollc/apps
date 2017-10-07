<?php
class appsSettingsGeneralAction extends waViewAction
{
    public function preExecute()
    {
        if (!waRequest::isXMLHttpRequest()) {
            $this->setLayout(new appsSettingsLayout());
        }
    }

    public function execute()
    {
        $message = 'Hello world!';
        $this->view->assign('message', $message);
    }
}
