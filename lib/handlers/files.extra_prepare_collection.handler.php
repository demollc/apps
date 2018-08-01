<?php
class appsFilesExtra_prepare_collectionHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = null)
    {
        $hook = array(
            'app' => 'files',
            'hook' => 'extra_prepare_collection',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
