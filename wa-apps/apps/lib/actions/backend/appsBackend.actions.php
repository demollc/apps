<?php
class appsBackendActions extends waViewActions
{
    public function preExecute()
    {
        if (!waRequest::isXMLHttpRequest()) {
            $this->setLayout(new appsDefaultLayout());
        }
    }

    public function defaultAction()
    {
        $message = _w('App to unite all events from other apps for common plugins.');
        $this->view->assign('message', $message);
    }
}
