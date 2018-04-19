<?php
return array(
    'id' => 'shop', //7.4.1.231
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
        'category_delete' => array(
            'params' => true
        ),
        'category_save' => array(
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
        'frontend_search' => array(
            'params' => false,
            'frontend' => true
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
        'product_custom_fields' => array(
            'params' => false
        ),
        'product_delete' => array(
            'params' => true
        ),
        'product_duplicate' => array(
            'params' => true
        ),
        'product_mass_update' => array(
            'params' => true
        ),
        'product_presave' => array(
            'params' => true
        ),
        'product_save' => array(
            'params' => true
        ),
        'product_sku_delete' => array(
            'params' => true
        ),
        'products_collection' => array(
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
        'signup' => array(
            'params' => true,
            'void' => false
        ),
        'sitemap' => array(
            'params' => true
        ),
        'update.route' => array(
            'params' => true
        )
    )
);
