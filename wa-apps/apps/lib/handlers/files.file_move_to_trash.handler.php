<?php

class appsFilesFile_move_to_trashHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('files.file_move_to_trash', $params, $array_keys);
        return ifempty($event);
    }
}
