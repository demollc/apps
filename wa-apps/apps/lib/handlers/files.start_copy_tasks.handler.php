<?php

class appsFilesStart_copy_tasksHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('files.start_copy_tasks', $params, $array_keys);
        return ifempty($event);
    }
}
