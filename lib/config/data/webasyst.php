<?php

return array(
    'id' => 'webasyst', //1.10.0
    'hooks' => array (
        'backend_assets' => array(
              'params' => true,
        ),
        'backend_dispatch_miss'  => array(
              'params' => true,
              'void' => false,
        ),
        'backend_header' => array(
            'params' => false,
            'void' => false,
            'array_keys' => array('html'),
        ),
        'backend_personal_profile' => array(
            'params' => true,
        ),
        'backend_page_edit'  => array(
            'params' => true,
        ),
        'backend_pages_sidebar'  => array(
            'params' => true,
            'void' => false,
        ),
        'page_delete'  => array(
            'params' => true,
            'void' => true,
        ),
        'page_edit'  => array(
            'params' => true,
            'void' => false,
        ),
        'page_save'  => array(
            'params' => true,
            'void' => true,
        ),
        'profile.tab'  => array(
            'params' => true,
        ),
        'signup'  => array(
            'params' => true,
            'void' => false,
        ),
    ),
);
