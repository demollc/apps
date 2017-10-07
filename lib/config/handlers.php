<?php
//Temporary file for generating hooks
return array(
    // blog v. 1.3.3.42413
    'blog' => array (
          0 => 'backend_assets',
          1 => 'backend_blog_edit',
          2 => 'backend_comments',
          3 => 'backend_post',
          4 => 'backend_post_edit',
          5 => 'backend_sidebar',
          6 => 'backend_stream',
          7 => 'blog_delete',
          8 => 'blog_predelete',
          9 => 'blog_save',
          10 => 'blog_validate',
          11 => 'comment_delete',
          12 => 'comment_predelete',
          13 => 'comment_presave_frontend',
          14 => 'comment_save_frontend',
          15 => 'comment_presave_backend',
          16 => 'comment_save_backend',
          17 => 'comment_validate',
          18 => 'cron_action',
          19 => 'frontend_post',
          20 => 'post_delete',
          21 => 'post_predelete',
          22 => 'post_validate',
          23 => 'prepare_blogs_frontend',
          24 => 'prepare_comments_frontend',
          25 => 'prepare_posts_frontend',
          26 => 'prepare_blogs_backend',
          27 => 'prepare_comments_backend',
          28 => 'prepare_posts_backend',
          29 => 'reminder_save',
          30 => 'reminder_send',
          31 => 'rights.config',
          32 => 'search_blogs_frontend',
          33 => 'search_blogs_backend',
          34 => 'search_posts_frontend',
          35 => 'search_posts_backend',
            // wa()->event(array_shift($events), $data); //TODO
            // frontend_action_'.$action, $params, $fields);
            // wa()->event(array('blog', 'contacts_delete'), $params);
            // wa()->event(array('blog', 'routing'), $route);
        ),
    'contacts' => array (
        //contacts v1.1.6.20
          0 => 'backend_assets',
          1 => 'backend_contact_info',
          2 => 'backend_last_view_context',
          3 => 'backend_sidebar',
          4 => 'backend_templates',
          5 => 'links',
          6 => 'profile.tab',
          7 => 'rights.config',
        //wa()->event(array('contacts', 'merge'), $params);
        //wa()->event(array('contacts', 'routing'), $routes);
        //wa('contacts')->event(array('contacts', 'search_form'));
        //wa('contacts')->event('contacts.contacts_collection', $params);
        //wa('contacts')->event('mailer.recipients.form', $params);
        //wa('contacts')->event('shop.backend_customers_list', $params);
        ),
    'files' => array(
    //files 1.1.2 99
          0 => 'backend_layout',
          1 => 'start_copy_tasks',
          2 => 'start_sync_tasks',
          3 => 'backend_file_list',
          4 => 'backend_file',
          5 => 'backend_folder',
          6 => 'backend_sidebar',
          7 => 'backend_storage',
          8 => 'collection',
          9 => 'extra_prepare_collection',
          10 => 'file_delete',
          11 => 'file_move_to_trash',
          12 => 'file_upload',
          13 => 'files_frontend_request',
          14 => 'rights.config',
          //wa()->event(array($this->application, 'routing'), $route);
        ),
    'helpdesk' => array(
    //helpdesk 1.2.3 35
          0 => 'action_editor',
          1 => 'backend_layout',
          2 => 'before_uninstall',
          3 => 'cron',
          4 => 'installed',
          5 => 'json_controller',
          6 => 'request_action',
          7 => 'request_created',
          8 => 'requests_delete',
          9 => 'sidebar',
          10 => 'source_editor',
          11 => 'view_action',
          12 => 'view_workflow_action',
          13 => 'workflow_action_presend_messages',
          14 => 'frontend_error',
          15 => 'requests_collection_filter',
        ),
    'hub' => array(
    //hub 1.1.2 14
          0 => 'backend',
          1 => 'frontend_author',
          2 => 'frontend_category',
          3 => 'frontend_error',
          4 => 'frontend_footer',
          5 => 'frontend_head',
          6 => 'frontend_header',
          7 => 'frontend_homepage',
          8 => 'frontend_nav',
          9 => 'frontend_search',
          10 => 'frontend_tag',
          11 => 'frontend_topic_add',
          12 => 'frontend_topic_edit',
          13 => 'frontend_topic',
        ),
    'photos' => array(
    //photos 1.2.7 26
          0 => 'extra_prepare_collection',
          1 => 'album_delete',
          2 => 'album_save',
          3 => 'backend_album_settings',
          4 => 'backend_assets',
          5 => 'backend_photo_toolbar',
          6 => 'backend_photo',
          7 => 'backend_photos_toolbar',
          8 => 'backend_sidebar',
          9 => 'collection',
          10 => 'frontend_assets',
          11 => 'frontend_collection',
          12 => 'frontend_layout',
          13 => 'frontend_photo',
          14 => 'frontend_sidebar',
          15 => 'make_stack',
          16 => 'photo_delete',
          17 => 'photo_rotate',
          18 => 'photo_upload',
          19 => 'prepare_photo_frontend',
          20 => 'prepare_photos_backend',
          21 => 'search_frontend_link',
            // wa()->event(array('photos', 'contacts_delete'), $params);
            // wa()->event(array('photos', 'contacts_links'), $params);
            // wa()->event(array('photos', 'routing'), $routes);
        ),
        'site' => array(
        //site 2.2.13 41
          0 => 'backend_personal',
          1 => 'domain_delete',
          2 => 'domain_save',
          3 => 'backend_settings',
          4 => 'backend_sidebar',
          5 => 'update.route',
            // wa()->event(array('site', 'routing'), $routes);
            // wa($app_id)->event(array($app_id, 'personal.settings'), $event_params);
        ),
        'shop' => array(
        //shop 7.2.13 146
          0 => 'backend_reports_channels',
          1 => 'backend_settings_stocks',
          2 => 'backend_tutorial',
          3 => 'customers_merge',
          4 => 'frontend_checkout_stock_rules',
          5 => 'frontend_products',
          6 => 'order_action.create',
          7 => 'order_calculate_discount',
          8 => 'product_custom_fields',
          9 => 'product_mass_update',
          10 => 'product_sku_delete',
          11 => 'backend_category_dialog',
          12 => 'backend_customer',
          13 => 'backend_customers_list',
          14 => 'backend_customers',
          15 => 'backend_followup_edit',
          16 => 'backend_menu',
          17 => 'backend_notification_add',
          18 => 'backend_notification_edit',
          19 => 'backend_notification_save',
          20 => 'backend_order_edit',
          21 => 'backend_order',
          22 => 'backend_orders',
          23 => 'backend_product_edit',
          24 => 'backend_product_sku_settings',
          25 => 'backend_product',
          26 => 'backend_products',
          27 => 'backend_reports',
          28 => 'backend_set_dialog',
          29 => 'backend_settings_affiliate',
          30 => 'backend_settings_discounts',
          31 => 'backend_settings',
          32 => 'backend_tutorial_page',
          33 => 'backend_welcome',
          34 => 'cart_add',
          35 => 'cart_delete',
          36 => 'category_delete',
          37 => 'category_save',
          38 => 'currency_delete',
          39 => 'followup_delete',
          40 => 'followup_save',
          41 => 'followup_send',
          42 => 'frontend_cart',
          43 => 'frontend_category',
          44 => 'frontend_checkout',
          45 => 'frontend_error',
          46 => 'frontend_footer',
          47 => 'frontend_head',
          48 => 'frontend_header',
          49 => 'frontend_homepage',
          50 => 'frontend_my_affiliate',
          51 => 'frontend_my_nav',
          52 => 'frontend_my_order',
          53 => 'frontend_my_orders',
          54 => 'frontend_my',
          55 => 'frontend_nav_aux',
          56 => 'frontend_nav',
          57 => 'frontend_product',
          58 => 'frontend_search',
          59 => 'image_thumb',
          60 => 'image_upload',
          61 => 'orders_collection.filter',
          62 => 'orders_collection',
          63 => 'product_delete',
          64 => 'product_duplicate',
          65 => 'product_save',
          66 => 'products_collection',
          67 => 'reset_complete',
          68 => 'reset',
          69 => 'rights.config',
          70 => 'set_delete',
          71 => 'set_save',
          72 => 'signup',
            // wa()->event(array('shop', 'contacts_delete'), $params);
            // wa()->event(array('shop', 'contacts_links'), $links);
            // wa()->event(array('shop', 'customers_collection'), $params);
            // wa()->event(array($this->app_id, 'sitemap'), $route);
            // wa()->event(array($this->application, 'routing'), $route);
            // wa()->event(array('shop', 'update.route'), $params);
            // 'order_action_form.'.$action_id, $data);
            // 'order_action.'.$this->getId(), $data);
        )

    );

//webasyst
wa('webasyst', 1)->event('backend_dispatch_miss', $app);
wa()->event('backend_page_edit', $page);
wa()->event('backend_pages_sidebar', $event_params);
wa()->event('page_delete', $event_params);
wa()->event('page_edit', $data);
wa()->event('page_save', $event_params);
wa()->event('signup', $contact);
wa()->event(array('contacts', 'contacts_collection'));
wa()->event(array('contacts', 'delete'), $id);
wa()->event(array('contacts', 'profile.tab'), $id);
wa()->event(array('contacts', 'save'), $this);
wa()->event(array('webasyst', 'backend_header'));
wa()->event(array('webasyst', 'backend_personal_profile'), $params);
