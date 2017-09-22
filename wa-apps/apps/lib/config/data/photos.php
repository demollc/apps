<?php

return array(
    'id' => 'photos',
    'hooks' => array(
    //photos 1.2.7 26
          'extra_prepare_collection' => array(
              'params' => true,
              ),
          'album_delete' => array(
              'params' => true,
              ),
          'album_save' => array(
              'params' => true,
              ),
          'backend_album_settings' => array(
              'params' => true,
              ),
          'backend_assets' => array(
              'params' => false,
              ),
          'backend_photo_toolbar' => array(
              'params' => true,
              ),
          'backend_photo' => array(
              'params' => true,
              ),
          'backend_photos_toolbar' => array(
              'params' => true,
              ),
          'backend_sidebar' => array(
              'params' => false,
              ),
          'collection' => array(
              'params' => true,
              ),
          'frontend_assets' => array(
              'params' => false,
              ),
          'frontend_collection' => array(
              'params' => false,
              ),
          'frontend_layout' => array(
              'params' => false,
              ),
          'frontend_photo' => array(
              'params' => true,
              ),
          'frontend_sidebar' => array(
              'params' => false,
              ),
          'make_stack' => array(
              'params' => true,
              ),
          'photo_delete' => array(
              'params' => true,
              ),
          'photo_rotate' => array(
              'params' => true,
              ),
          'photo_upload' => array(
              'params' => true,
              ),
          'prepare_photo_frontend' => array(
              'params' => true,
              ),
          'prepare_photos_backend' => array(
              'params' => true,
              ),
          'search_frontend_link' => array(
              'params' => true,
              ),
            // wa()->event(array('photos', 'contacts_delete'), $params);
            // wa()->event(array('photos', 'contacts_links'), $params);
            // wa()->event(array('photos', 'routing'), $routes);
        ),
    );
//public function event($name, &$params = null, $array_keys = null)
// wa-apps/photos/api/v1/photos.photo.delete.method.php:wa()->event('photo_delete', $id)
// wa-apps/photos/api/v1/photos.album.delete.method.php:wa()->event('album_delete', $id)
// wa-apps/photos/lib/config/photosConfig.class.php:wa()->event(array('photos', 'routing'), $routes)
// wa-apps/photos/lib/classes/photosCollection.class.php:wa()->event('collection', $params)
// wa-apps/photos/lib/classes/photosCollection.class.php:wa('photos')->event('extra_prepare_collection', $params)
// wa-apps/photos/lib/classes/photosCollection.class.php:wa()->event('prepare_photos_'.wa()->getEnv(), $photos)
// wa-apps/photos/lib/classes/photosFrontendCollectionViewAction.class.php:wa()->event('frontend_collection'))
// wa-apps/photos/lib/models/photosPhoto.model.php:wa()->event('photo_upload', $image)
// wa-apps/photos/lib/models/photosPhoto.model.php:wa()->event('photo_rotate', $params)
// wa-apps/photos/lib/handlers/contacts.links.handler.php:wa()->event(array('photos', 'contacts_links'), $params)
// wa-apps/photos/lib/handlers/contacts.delete.handler.php:wa()->event(array('photos', 'contacts_delete'), $params)
// wa-apps/photos/lib/actions/frontend/photosFrontendLoadPhoto.controller.php:wa()->event('frontend_photo', $photo)
// wa-apps/photos/lib/actions/frontend/photosFrontendLoadPhoto.controller.php:wa()->event('prepare_photo_frontend', $photo)
// wa-apps/photos/lib/actions/frontend/photosFrontendPhoto.action.php:wa()->event('frontend_photo', $this->photo))
// wa-apps/photos/lib/actions/frontend/photosFrontendPhoto.action.php:wa()->event('prepare_photo_frontend', $photo)
// wa-apps/photos/lib/actions/stack/photosStackMake.controller.php:wa()->event('make_stack', $stack)
// wa-apps/photos/lib/actions/search/photosSearchPhotos.action.php:wa()->event('search_frontend_link', $query)
// wa-apps/photos/lib/actions/search/photosSearchPhotos.action.php:wa()->event('backend_photos_toolbar'), $params)
// wa-apps/photos/lib/actions/tags/photosTagPhotos.action.php:wa()->event('backend_photos_toolbar', $params))
// wa-apps/photos/lib/actions/photo/photosPhotoDelete.controller.php:wa()->event('photo_delete', $id)
// wa-apps/photos/lib/actions/photo/photosPhotoLoad.controller.php:wa()->event('backend_photo', $photo_id)
// wa-apps/photos/lib/actions/photo/photosPhotoList.action.php:wa()->event('backend_photos_toolbar', $params))
// wa-apps/photos/lib/actions/album/photosAlbumPhotos.action.php:wa()->event('backend_photos_toolbar', $params))
// wa-apps/photos/lib/actions/album/photosAlbumDelete.controller.php:wa()->event('album_delete', $album_id)
// wa-apps/photos/lib/actions/album/photosAlbumSave.controller.php:wa()->event('album_save', $params)
// wa-apps/photos/lib/actions/dialog/photosDialogAlbumSettings.action.php:wa()->event('backend_album_settings', $params))
// wa-apps/photos/lib/layouts/photosDefaultFrontend.layout.php:wa()->event('frontend_assets'))
// wa-apps/photos/lib/layouts/photosDefaultFrontend.layout.php:wa()->event('frontend_layout'))
// wa-apps/photos/lib/layouts/photosDefaultFrontend.layout.php:wa()->event('frontend_sidebar'))
// wa-apps/photos/lib/layouts/photosDefault.layout.php:wa()->event('backend_photo_toolbar'))
// wa-apps/photos/lib/layouts/photosDefault.layout.php:wa()->event('backend_sidebar'))
// wa-apps/photos/lib/layouts/photosDefault.layout.php:wa()->event('backend_assets'))