<?php 

class appsDefaultLayout extends waLayout
{
    public function execute()
    {
        $this->view->assign('page', 'plugins');
    }
}
