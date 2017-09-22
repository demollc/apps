<?php

class appsFilesStart_copy_tasksHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('files.start_copy_tasks', $params, $array_keys);
    }
}
