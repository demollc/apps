<?php

return array(
    'id' => 'hub',
    'hooks' => array(
    //hub 1.1.2 14
          'backend' => array(
              'params' => false,
              'void' => false,
              ),
          'frontend_author' => array(
              'params' => true,
              'void' => false,
              ),
          'frontend_category' => array(
              'params' => true,
              'void' => false,
              ),
            'frontend_comments' => array(
                'params' => false,
                'void' => true,
                ),
          'frontend_error' => array(
              'params' => true,
              'void' => true,
              ),
          'frontend_footer' => array(
              'params' => false,
              'void' => false,
              ),
          'frontend_head' => array(
              'params' => false,
              'void' => false,
              ),
          'frontend_header' => array(
              'params' => false,
              'void' => false,
              ),
          'frontend_homepage' => array(
              'params' => false,
              'void' => false,
              ),
          'frontend_nav' => array(
              'params' => false,
              'void' => false,
              ),
          'frontend_search' => array(
              'params' => false,
              'void' => false,
              ),
          'frontend_tag' => array(
              'params' => true,
              'void' => false,
              ),
          'frontend_topic_add' => array(
              'params' => true,
              'array_keys' => array('top_block', 'bottom_block'),
              'void' => false,
              ),
          'frontend_topic_edit' => array(
              'params' => true,
              'array_keys' => array('top_block', 'bottom_block'),
              'void' => false,
              ),
          'frontend_topic' => array(
              'params' => true,
              'array_keys' => array('title_suffix', 'body', 'comments'),
              'void' => false,
              ),
          'backend_pages_sidebar' => array(
              'params' => true,
              'void' => false,
              ),
          'backend_page_edit' => array(
              'params' => true,
              'array_keys' => array('action_button_li', 'section', 'settings_section'),
              'void' => false,
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
        ),
    );
//public function event($name, &$params = null, $array_keys = null)
// wa-apps/hub/lib/actions/backend/hubBackend.action.php:wa('hub')->event('backend')
// wa-apps/hub/lib/actions/frontend/hubFrontendAuthorReplies.action.php:wa()->event('frontend_author', $author))
// wa-apps/hub/lib/actions/frontend/hubFrontendTag.action.php:wa()->event('frontend_tag', $tag_info))
// wa-apps/hub/lib/actions/frontend/hubFrontendAuthorFollowing.action.php:wa()->event('frontend_author', $author))
// wa-apps/hub/lib/actions/frontend/hubFrontendCategory.action.php:wa()->event('frontend_category', $category))
// wa-apps/hub/lib/actions/frontend/hubFrontendAuthor.action.php:wa()->event('frontend_author', $author))
// wa-apps/hub/lib/actions/frontend/hubFrontendSearch.action.php:wa()->event('frontend_search'))
// wa-apps/hub/lib/actions/frontend/hubFrontendTopic.action.php:wa()->event('frontend_comments', $comments)
// wa-apps/hub/lib/actions/frontend/hubFrontendTopic.action.php:wa()->event('frontend_topic', $topic, array('title_suffix', 'body', 'comments'))
// wa-apps/hub/lib/actions/frontend/hubFrontendAdd.action.php:wa()->event('frontend_topic_add', $data, array('top_block', 'bottom_block')))
// wa-apps/hub/lib/actions/frontend/hubFrontend.action.php:wa()->event('frontend_homepage'))
// wa-apps/hub/lib/actions/frontend/hubFrontend.action.php:wa()->event('frontend_nav'))
// wa-apps/hub/lib/actions/frontend/hubFrontend.action.php:wa()->event('frontend_error', $e)
// wa-apps/hub/lib/actions/frontend/hubFrontendTopicEdit.action.php:wa()->event('frontend_topic_edit', $this->topic, array('top_block', 'bottom_block')))
// wa-apps/hub/lib/layouts/hubFrontend.layout.php:wa()->event('frontend_head'))
// wa-apps/hub/lib/layouts/hubFrontend.layout.php:wa()->event('frontend_header'))
// wa-apps/hub/lib/layouts/hubFrontend.layout.php:wa()->event('frontend_nav'))
// wa-apps/hub/lib/layouts/hubFrontend.layout.php:wa()->event('frontend_footer'))
