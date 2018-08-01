<?php

return array(
    'id' => 'tasks',
    'hooks' => array (
        //tasks 1.0.1
          'task_delete'  => array(
              'params' => true,
              'void' => true,
              ),
          'task_save'  => array(
              'params' => true,
              'void' => true,
              ),
          'task_log'  => array(
              'params' => true,
              'void' => true,
              ),
          'tasks_log'  => array(
              'params' => true,
              'void' => true,
              ),
          'backend_task_edit'  => array(
              'params' => true,
              'void' => false,
              ),
          'backend_sidebar'  => array(
              'params' => false,
              'void' => false,
              ),
          'tasks_collection'  => array(
              'params' => true,
              'void' => false,
              ),
          'task_log_add'  => array(
              'params' => true,
              'void' => false,
              ),
          'rights.config'  => array(
              'params' => true,
              'void' => true,
              ),
        ),
    );