<?php
class appsPhotosPrepare_photo_frontendHandler extends waEventHandler

{
    public function execute(&$params = null, $array_keys = null)
    {
        $hook = array(
            'app' => 'photos',
            'hook' => 'prepare_photo_frontend',
            'params' => $params
        );
        $event = wao(new appsEvent())->call($hook);
        return $event;
    }
}
