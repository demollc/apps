<?php

return array(
    'id' => 'blog',
    'hooks'=> array (
          'backend_assets' => array(
              'params' => false,
              ),
          'backend_blog_edit' => array(
              'params' => true,
              'array_keys' => array('settings'),
              ),
          'backend_comments' => array(
              'params' => true,
              'array_keys' => array('toolbar'),
              ),
          'backend_post' => array(
              'params' => true,
              'array_keys' => array('footer'),
              ),
          'backend_post_edit' => array(
              'params' => true,
              'array_keys' => array('sidebar', 'toolbar', 'editor_tab'),
              ),
          'backend_sidebar' => array(
              'params' => true,
              'array_keys' => array('menu', 'section', 'system'),
              ),
          'backend_stream' => array(
              'params' => true,
              'array_keys' => array('menu'),
              ),
          'blog_delete' => array(
              'params' => true,
              ),
          'blog_predelete' => array(
              'params' => true,
              ),
          'blog_save' => array(
              'params' => true,
              ),
          'blog_validate' => array(
              'params' => true,
              ),
          'comment_delete' => array(
              'params' => true,
              ),
          'comment_predelete' => array(
              'params' => true,
              ),
          'comment_presave_frontend' => array(
              'params' => true,
              ),
          'comment_save_frontend' => array(
              'params' => true,
              ),
          'comment_presave_backend' => array(
              'params' => true,
              ),
          'comment_save_backend' => array(
              'params' => true,
              ),
          'comment_validate' => array(
              'params' => true,
              ),
          'contacts_delete' => array(
              'params' => true,
              ),
          'cron_action' => array(
              'params' => true,
              ),
          'followup_send' => array(
              'params' => true,
                //deprecated?
              ),
          'frontend_action_default' => array(
              'params' => true,
              'array_keys' => array('nav_before', 'footer', 'head', 'sidebar'),
              'frontend' => true,
              ),
          'frontend_action_error' => array(
              'params' => true,
              'array_keys' => array('nav_before', 'footer', 'head', 'sidebar'),
              'frontend' => true,
              ),
          'frontend_action_page' => array(
              'params' => true,
              'array_keys' => array('nav_before', 'footer', 'head', 'sidebar'),
              'frontend' => true,
              ),
          'frontend_action_post' => array(
              'params' => true,
              'array_keys' => array('nav_before', 'footer', 'head', 'sidebar'),
              'frontend' => true,
              ),
          'frontend_post' => array(
              'params' => true,
              'array_keys' => array('footer'),
              'frontend' => true,
              ),
          'post_delete' => array(
              'params' => true,
              ),
          'post_predelete' => array(
              'params' => true,
              ),
          'post_prepublish' => array(
              'params' => true,
              ),
          'post_presave' => array(
              'params' => true,
              ),
          'post_preshedule' => array(
              'params' => true,
              ),
          'post_publish' => array(
              'params' => true,
              ),
          'post_save' => array(
              'params' => true,
              ),
          'post_shedule' => array(
              'params' => true,
              ),
          'post_validate' => array(
              'params' => true,
              ),
          'prepare_blogs_frontend' => array(
              'params' => true,
              ),
          'prepare_comments_frontend' => array(
              'params' => true,
              ),
          'prepare_posts_frontend' => array(
              'params' => true,
              ),
          'prepare_blogs_backend' => array(
              'params' => true,
              ),
          'prepare_comments_backend' => array(
              'params' => true,
              ),
          'prepare_posts_backend' => array(
              'params' => true,
              ),
          'reminder_save' => array(
              'params' => false,
              ),
          'reminder_send' => array(
              'params' => true,
              ),
          'rights.config' => array(
              'params' => true,
              ),
          'routing' => array(
              'params' => true,
              ),
          'search_blogs_frontend' => array(
              'params' => true,
              ),
          'search_blogs_backend' => array(
              'params' => true,
              ),
          'search_posts_frontend' => array(
              'params' => true,
              ),
          'search_posts_backend' => array(
              'params' => true,
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
              ),
          'page_edit' => array(
              'params' => true,
              'void' => false,
              ),
          'page_delete' => array(
              'params' => true,
              ),
        ),
    );
//public function event($name, &$params = null, $array_keys = null)
// wa-apps/blog/lib/cli/blogReminder.cli.php:wa()->event('reminder_send', $message_count)
// wa-apps/blog/lib/config/blogConfig.class.php:wa()->event(array('blog', 'routing'), $route)
// wa-apps/blog/lib/config/blogRightConfig.class.php:wa()->event('rights.config', $this)
// wa-apps/blog/lib/models/blogBlog.model.php:wa()->event('search_blogs_'.wa()->getEnv(), $options)
// wa-apps/blog/lib/models/blogBlog.model.php:wa()->event('prepare_blogs_'.wa()->getEnv(), $items)
// wa-apps/blog/lib/models/blogBlog.model.php:wa()->event('blog_predelete', $blog_ids)
// wa-apps/blog/lib/models/blogBlog.model.php:wa()->event('blog_delete', $blog_ids)
// wa-apps/blog/lib/models/blogPost.model.php:wa('blog')->event('search_posts_'.wa()->getEnv(), $options)
// wa-apps/blog/lib/models/blogPost.model.php:wa()->event('prepare_posts_'.wa()->getEnv(), $items)
// wa-apps/blog/lib/models/blogPost.model.php:wa()->event(array_shift($events), $data)
// wa-apps/blog/lib/models/blogPost.model.php:wa()->event(array_shift($events), $data)
// wa-apps/blog/lib/models/blogPost.model.php:wa()->event('post_predelete', $post_ids)
// wa-apps/blog/lib/models/blogPost.model.php:wa()->event('post_delete', $post_ids)
// wa-apps/blog/lib/models/blogPost.model.php:wa()->event('post_validate', $data)
// wa-apps/blog/lib/models/blogComment.model.php:wa()->event('prepare_comments_'.wa()->getEnv(), $items)
// wa-apps/blog/lib/models/blogComment.model.php:wa()->event('comment_presave_'.wa()->getEnv(), $comment)
// wa-apps/blog/lib/models/blogComment.model.php:wa()->event('comment_save_'.wa()->getEnv(), $comment)
// wa-apps/blog/lib/models/blogComment.model.php:wa()->event('comment_predelete', $comment_ids)
// wa-apps/blog/lib/models/blogComment.model.php:wa()->event('comment_delete', $comment_ids)
// wa-apps/blog/lib/models/blogComment.model.php:wa()->event('comment_validate', $comment)
// wa-apps/blog/lib/handlers/contacts.delete.handler.php:wa()->event(array('blog', 'contacts_delete'), $params)
// wa-apps/blog/lib/actions/backend/blogBackendSidebar.action.php:wa()->event('backend_sidebar', $params, array('menu', 'section', 'system')))
// wa-apps/blog/lib/actions/backend/blogBackend.action.php:wa()->event('backend_stream', $stream, array('menu')))
// wa-apps/blog/lib/actions/cron/blogCronSchedule.cli.php:wa()->event('cron_action',$action)
// wa-apps/blog/lib/actions/frontend/blogFrontendPost.action.php:wa()->event('frontend_post', $post, array('footer')))
// wa-apps/blog/lib/actions/comments/blogComments.action.php:wa()->event('backend_comments', $comments, array('toolbar')))
// wa-apps/blog/lib/actions/settings/blogSettings.action.php:wa()->event('reminder_save')
// wa-apps/blog/lib/actions/blog/blogBlogSettings.action.php:wa()->event('blog_save', $data)
// wa-apps/blog/lib/actions/blog/blogBlogSettings.action.php:wa()->event('backend_blog_edit', $blog, array('settings')))
// wa-apps/blog/lib/actions/blog/blogBlogSettings.action.php:wa()->event('blog_validate', $data)
// wa-apps/blog/lib/actions/post/blogPost.action.php:wa()->event('backend_post', $post, array('footer')))
// wa-apps/blog/lib/actions/post/blogPostEdit.action.php:wa()->event('backend_post_edit', $post, array('sidebar', 'toolbar', 'editor_tab')))
// wa-apps/blog/lib/layouts/blogDefault.layout.php:wa()->event('backend_assets'))
// wa-apps/blog/lib/layouts/blogFrontend.layout.php:wa()->event('frontend_action_'.$action, $params, $fields))
