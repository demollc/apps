<?php
class appsBackendActions extends waViewActions
{
    public function preExecute()
    {
        if(!waRequest::isXMLHttpRequest()){
            $this->setLayout(new appsDefaultLayout());
        }
    }

    public function defaultAction()
    {
        $message = 'Hello world!';
        $this->view->assign('message', $message);
    }
}
