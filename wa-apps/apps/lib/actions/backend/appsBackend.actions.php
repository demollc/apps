<?php
class appsBackendActions extends waViewActions
{
    public function defaultAction()
    {
        $message = 'Hello world!';
        $this->view->assign('message', $message);
    }
}
