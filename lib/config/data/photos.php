<?php

return array(
    'id' => 'photos',
    'hooks' => array(
    //photos 1.2.7 26
          'album_delete' => array(
              'params' => true,
              'void' => true,
              ),
          'album_save' => array(
              'params' => true,
              'void' => true,
              ),
          'backend_album_settings' => array(
              'params' => true,
              'void' => false,
              ),
          'backend_assets' => array(
              'params' => false,
              'void' => false,
              ),
          'backend_photo_toolbar' => array(
              'params' => true,
              'void' => false,
              ),
          'backend_photo' => array(
              'params' => true,
              'void' => false,
              ),
          'backend_photos_toolbar' => array(
              'params' => true,
              'void' => false,
              ),
          'backend_sidebar' => array(
              'params' => false,
              'void' => false,
              ),
          'collection' => array(
              'params' => true,
              'void' => false,
              ),
          'extra_prepare_collection' => array(
              'params' => true,
              'void' => true,
              ),
          'frontend_assets' => array(
              'params' => false,
              'void' => false,
              ),
          'frontend_collection' => array(
              'params' => false,
              'void' => false,
              ),
          'frontend_layout' => array(
              'params' => false,
              'void' => false,
              ),
          'frontend_photo' => array(
              'params' => true,
              'void' => false,
              ),
          'frontend_sidebar' => array(
              'params' => false,
              'void' => false,
              ),
          'make_stack' => array(
              'params' => true,
              'void' => true,
              ),
          'photo_delete' => array(
              'params' => true,
              'void' => true,
              ),
          'photo_rotate' => array(
              'params' => true,
              'void' => true,
              ),
          'photo_upload' => array(
              'params' => true,
              'void' => false,
              ),
          'prepare_photo_frontend' => array(
              'params' => true,
              'void' => true,
              ),
          'prepare_photos_backend' => array(
              'params' => true,
              'void' => true,
              ),
          'prepare_photos_frontend' => array(
              'params' => true,
              'void' => true,
              ),
          'routing' => array(
              'params' => true,
              ),
          'search_frontend_link' => array(
              'params' => true,
              'void' => false,
              ),
          'backend_pages_sidebar' => array(
              'params' => true,
              'void' => false,
              ),
          'backend_page_edit' => array(
              'params' => true,
              'array_keys' => array('action_button_li', 'section', 'settings_section'),
              ),
          'page_save' => array(
              'params' => true,
              'void' => true,
              ),
          'page_edit' => array(
              'params' => true,
              'void' => false,
              ),
          'page_delete' => array(
              'params' => true,
              'void' => true,
              ),
            // wa()->event(array('photos', 'contacts_delete'), $params);
            // wa()->event(array('photos', 'contacts_links'), $params);
        ),
    );
//public function event($name, &$params = null, $array_keys = null)
// wa-apps/photos/lib/config/photosConfig.class.php:        $result = wa()->event(array('photos', 'routing'), $routes);
// wa-apps/photos/lib/handlers/contacts.links.handler.php:        $ext_links = wa()->event(array('photos', 'contacts_links'), $params);
