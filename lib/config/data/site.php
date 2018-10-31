<?php

return array(
    'id' => 'site', //site 2.2.13 41
    'hooks' => array(
            'backend_page_edit' => array(
                'params' => true,
                'array_keys' => array('action_button_li', 'section', 'settings_section'),
            ),
            'backend_pages_sidebar' => array(
                'params' => true,
                'void' => false,
            ),
            'backend_personal' => array(
                'params' => false,
            ),
            'backend_settings' => array(
                'params' => true,
                'array_keys' => array(
                    'action_button_li',
                    'section')
            ),
            'backend_sidebar'=> array(
                'params' => false,
            ),
            'domain_delete' => array(
                'params' => true,
            ),
            'domain_save' => array(
                'params' => true,
            ),
            'frontend_page' => array(
                'params' => true,
            ),
            'frontend_page_before' => array(
                'params' => true,
            ),
            'page_delete' => array(
                'params' => true,
                'void' => true,
            ),
            'page_edit' => array(
                'params' => true,
                'void' => false,
            ),
            'page_save' => array(
                'params' => true,
                'void' => true,
            ),
            'personal.settings' =>  array(
                'params' => true,
            ),
            'routing' =>  array(
                'params' => true,
            ),
            'save.route' =>  array(
                'params' => true,
            ),
            'update.route' =>  array(
                'params' => true,
            ),
        )
    );
