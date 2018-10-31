<?php
return array(
    'id' => 'shop', //8.0.0
    'hooks' => array(
        'backend_category_dialog' => array(
            'params' => true
        ),
        'backend_customer' => array(
            'params' => true
        ),
        'backend_customers' => array(
            'params' => false
        ),
        'backend_customers_list' => array(
            'params' => true
        ),
        'backend_followup_edit' => array(
            'params' => true
        ),
        'backend_menu' => array(
            'params' => false
        ),
        'backend_notification_add' => array(
            'params' => false
        ),
        'backend_notification_edit' => array(
            'params' => true
        ),
        'backend_notification_save' => array(
            'params' => true
        ),
        'backend_order' => array(
            'params' => true,
            'array_keys' => array(
                0 => 'title_suffix',
                1 => 'action_button',
                2 => 'action_link',
                3 => 'info_section'
            )
        ),
        'backend_order_edit' => array(
            'params' => true
        ),
        'backend_order_print' => array(
            'params' => true
        ),
        'backend_orders' => array(
            'params' => false
        ),
        'backend_page_edit' => array(
            'params' => true,
            'array_keys' => array(
                0 => 'action_button_li',
                1 => 'section',
                2 => 'settings_section'
            )
        ),
        'backend_pages_sidebar' => array(
            'params' => true,
            'void' => false
        ),
        'backend_product' => array(
            'params' => true,
            'array_keys' => array()
        ),
        'backend_product_edit' => array(
            'params' => true
        ),
        'backend_product_sku_settings' => array(
            'params' => true
        ),
        'backend_products' => array(
            'params' => true
        ),
        'backend_reports' => array(
            'params' => false
        ),
        'backend_reports_channels' => array(
            'params' => true
        ),
        'backend_set_dialog' => array(
            'params' => true
        ),
        'backend_settings' => array(
            'params' => false
        ),
        'backend_settings_affiliate' => array(
            'params' => false
        ),
        'backend_settings_discounts' => array(
            'params' => false
        ),
        'backend_settings_stocks' => array(
            'params' => true
        ),
        'backend_stocks.stocks' => array(
            'params' => true
        ),
        'backend_stocks.transfer' => array(
            'params' => true
        ),
        'backend_stocks.transfer_info' => array(
            'params' => true
        ),
        'backend_stocks.transfer_list' => array(
            'params' => true
        ),
        'backend_tutorial' => array(
            'params' => false
        ),
        'backend_tutorial_page' => array(
            'params' => true
        ),
        'backend_welcome' => array(
            'params' => false
        ),
        'cart_add' => array(
            'params' => true
        ),
        'cart_delete' => array(
            'params' => true
        ),
        'cart_update' => array(
            'params' => true
        ),
        'category_delete' => array(
            'params' => true
        ),
        'category_save' => array(
            'params' => true
        ),
        'category_update' => array(
            'params' => true
        ),
        'contacts_change' => array(
            'params' => true
        ),
        'contacts_delete' => array(
            'params' => true
        ),
        'contacts_links' => array(
            'params' => true
        ),
        'currency_delete' => array(
            'params' => true
        ),
        'currency_primary' => array(
            'params' => true
        ),
        'currency_change' => array(
            'params' => true
        ),
        'customers_collection' => array(
            'params' => true
        ),
        'customers_merge' => array(
            'params' => true
        ),
        'followup_delete' => array(
            'params' => true
        ),
        'followup_save' => array(
            'params' => true
        ),
        'followup_send' => array(
            'params' => true
        ),
        'frontend_cart' => array(
            'params' => false
        ),
        'frontend_category' => array(
            'params' => true
        ),
        'frontend_checkout' => array(
            'params' => true
        ),
        'frontend_checkout_stock_rules' => array(
            'params' => true
        ),
        'frontend_compare' => array(
            'params' => true
        ),
        'frontend_error' => array(
            'params' => true,
            'frontend' => true
        ),
        'frontend_footer' => array(
            'params' => false,
            'frontend' => true
        ),
        'frontend_head' => array(
            'params' => false,
            'frontend' => true
        ),
        'frontend_header' => array(
            'params' => false,
            'frontend' => true
        ),
        'frontend_homepage' => array(
            'params' => false,
            'frontend' => true
        ),
        'frontend_my' => array(
            'params' => false,
            'frontend' => true
        ),
        'frontend_my_affiliate' => array(
            'params' => false,
            'frontend' => true
        ),
        'frontend_my_nav' => array(
            'params' => false,
            'frontend' => true
        ),
        'frontend_my_order' => array(
            'params' => true,
            'frontend' => true
        ),
        'frontend_my_orders' => array(
            'params' => true,
            'frontend' => true
        ),
        'frontend_nav' => array(
            'params' => false,
            'frontend' => true
        ),
        'frontend_nav_aux' => array(
            'params' => false,
            'frontend' => true
        ),
        'frontend_product' => array(
            'params' => true,
            'array_keys' => array(
                0 => 'menu',
                1 => 'cart',
                2 => 'block_aux',
                3 => 'block'
            )
        ),
        'frontend_products' => array(
            'params' => true
        ),
        'frontend_review_add.after' => array(
            'params' => true
        ),
        'frontend_review_add.before' => array(
            'params' => true
        ),
        'frontend_search' => array(
            'params' => false,
            'frontend' => true
        ),
        'image_generate_thumb' => array(
            'params' => true
        ),
        'image_thumb' => array(
            'params' => true
        ),
        'image_upload' => array(
            'params' => true
        ),
        'order_action.callback' => array(
            'params' => true
        ),
        'order_action.comment' => array(
            'params' => true
        ),
        'order_action.complete' => array(
            'params' => true
        ),
        'order_action.create' => array(
            'params' => true
        ),
        'order_action.delete' => array(
            'params' => true
        ),
        'order_action.pay' => array(
            'params' => true
        ),
        'order_action.process' => array(
            'params' => true
        ),
        'order_action.restore' => array(
            'params' => true
        ),
        'order_action.ship' => array(
            'params' => true
        ),
        'order_action_form.callback' => array(
            'params' => true
        ),
        'order_action_form.comment' => array(
            'params' => true
        ),
        'order_action_form.complete' => array(
            'params' => true
        ),
        'order_action_form.delete' => array(
            'params' => true
        ),
        'order_action_form.pay' => array(
            'params' => true
        ),
        'order_action_form.process' => array(
            'params' => true
        ),
        'order_action_form.restore' => array(
            'params' => true
        ),
        'order_action_form.ship' => array(
            'params' => true
        ),
        'order_calculate_discount' => array(
            'params' => true
        ),
        'orders_collection' => array(
            'params' => true
        ),
        'orders_collection.filter' => array(
            'params' => true
        ),
        'orders_collection.prepared' => array(
            'params' => true
        ),
        'page_delete' => array(
            'params' => true,
            'void' => true
        ),
        'page_edit' => array(
            'params' => true,
            'void' => false
        ),
        'page_save' => array(
            'params' => true,
            'void' => true
        ),
        'products_add_sets.after' => array(
            'params' => true
        ),
        'products_add_sets.before' => array(
            'params' => true
        ),
        'product_badge_delete.after' => array(
            'params' => true
        ),
        'product_badge_delete.before' => array(
            'params' => true
        ),
        'product_badge_set.after' => array(
            'params' => true
        ),
        'product_badge_set.before' => array(
            'params' => true
        ),
        'product_custom_fields' => array(
            'params' => false
        ),
        'product_delete' => array(
            'params' => true
        ),
        'product_duplicate' => array(
            'params' => true
        ),
        'product_images_delete' => array(
            'params' => true
        ),
        'product_mass_update' => array(
            'params' => true
        ),
        'product_presave' => array(
            'params' => true
        ),
        'products_reviews' => array(
            'params' => true
        ),
        'product_save' => array(
            'params' => true
        ),
        'product_sku_delete' => array(
            'params' => true
        ),
        'products_set_categories.after' => array(
            'params' => true
        ),
        'products_set_categories.before' => array(
            'params' => true
        ),
        'products_tags_set.after' => array(
            'params' => true
        ),
        'products_tags_set.before' => array(
            'params' => true
        ),
        'products_types_set.after' => array(
            'params' => true
        ),
        'products_types_set.before' => array(
            'params' => true
        ),
        'products_collection' => array(
            'params' => true
        ),
        'products_visibility_set.after' => array(
            'params' => true
        ),
        'products_visibility_set.before' => array(
            'params' => true
        ),
        'reset' => array(
            'params' => false
        ),
        'reset_complete' => array(
            'params' => false
        ),
        'rights.config' => array(
            'params' => true
        ),
        'routing' => array(
            'params' => true
        ),
        'set_delete' => array(
            'params' => true
        ),
        'set_save' => array(
            'params' => true
        ),
        'shipping_package' => array(
            'params' => true
        ),
        'signup' => array(
            'params' => true,
            'void' => false
        ),
        'sitemap' => array(
            'params' => true
        ),
        'start_followup_cli' => array(
            'params' => true,
             'array_keys' => array(
                0 => 'followups'
            )
        ),
        'update.route' => array(
            'params' => true
        ),
        'view_categories' => array(
            'params' => true
        ),
        'view_features' => array(
            'params' => true
        ),
        'view_products.after' => array(
            'params' => true
        ),
        'view_products.before' => array(
            'params' => true
        ),
        'view_promos' => array(
            'params' => true
        ),
        'view_reviews' => array(
            'params' => true
        ),
        'view_tags' => array(
            'params' => true
        ),
        'web_push_send' => array(
            'params' => true
        )
    )
);
