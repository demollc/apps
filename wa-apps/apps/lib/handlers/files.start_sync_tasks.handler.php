<?php

class appsFilesStart_sync_tasksHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('files.start_sync_tasks', $params, $array_keys);
    }
}
