<?php

return array(
    'id' => 'shop',
    'hooks' => array(
        //shop 7.2.13 146
          'backend_personal' => array(
              'params' => false,
              ),
          'backend_reports_channels' => array(
              'params' => false,
              ),
          'backend_settings_stocks' => array(
              'params' => false,
              ),
          'backend_tutorial' => array(
              'params' => false,
              ),
          'customers_merge' => array(
              'params' => false,
              ),
          'frontend_checkout_stock_rules' => array(
              'params' => false,
              ),
          'frontend_products' => array(
              'params' => false,
              ),
          'order_action.create' => array(
              'params' => false,
              ),
          'order_calculate_discount' => array(
              'params' => false,
              ),
          'product_custom_fields' => array(
              'params' => false,
              ),
          'product_mass_update' => array(
              'params' => false,
              ),
          'product_sku_delete' => array(
              'params' => false,
              ),
          'backend_category_dialog' => array(
              'params' => false,
              ),
          'backend_customer' => array(
              'params' => false,
              ),
          'backend_customers_list' => array(
              'params' => false,
              ),
          'backend_customers' => array(
              'params' => false,
              ),
          'backend_followup_edit' => array(
              'params' => false,
              ),
          'backend_menu' => array(
              'params' => false,
              ),
          'backend_notification_add' => array(
              'params' => false,
              ),
          'backend_notification_edit' => array(
              'params' => false,
              ),
          'backend_notification_save' => array(
              'params' => false,
              ),
          'backend_order_edit' => array(
              'params' => false,
              ),
          'backend_order' => array(
              'params' => false,
              ),
          'backend_orders' => array(
              'params' => false,
              ),
          'backend_product_edit' => array(
              'params' => false,
              ),
          'backend_product_sku_settings' => array(
              'params' => false,
              ),
          'backend_product' => array(
              'params' => false,
              ),
          'backend_products' => array(
              'params' => false,
              ),
          'backend_reports' => array(
              'params' => false,
              ),
          'backend_set_dialog' => array(
              'params' => false,
              ),
          'backend_settings_affiliate' => array(
              'params' => false,
              ),
          'backend_settings_discounts' => array(
              'params' => false,
              ),
          'backend_settings' => array(
              'params' => false,
              ),
          'backend_tutorial_page' => array(
              'params' => false,
              ),
          'backend_welcome' => array(
              'params' => false,
              ),
          'cart_add' => array(
              'params' => false,
              ),
          'cart_delete' => array(
              'params' => false,
              ),
          'category_delete' => array(
              'params' => false,
              ),
          'category_save' => array(
              'params' => false,
              ),
          'currency_delete' => array(
              'params' => false,
              ),
          'followup_delete' => array(
              'params' => false,
              ),
          'followup_save' => array(
              'params' => false,
              ),
          'followup_send' => array(
              'params' => false,
              ),
          'frontend_cart' => array(
              'params' => false,
              ),
          'frontend_category' => array(
              'params' => false,
              ),
          'frontend_checkout' => array(
              'params' => false,
              ),
          'frontend_error' => array(
              'params' => false,
              ),
          'frontend_footer' => array(
              'params' => false,
              ),
          'frontend_head' => array(
              'params' => false,
              ),
          'frontend_header' => array(
              'params' => false,
              ),
          'frontend_homepage' => array(
              'params' => false,
              ),
          'frontend_my_affiliate' => array(
              'params' => false,
              ),
          'frontend_my_nav' => array(
              'params' => false,
              ),
          'frontend_my_order' => array(
              'params' => false,
              ),
          'frontend_my_orders' => array(
              'params' => false,
              ),
          'frontend_my' => array(
              'params' => false,
              ),
          'frontend_nav_aux' => array(
              'params' => false,
              ),
          'frontend_nav' => array(
              'params' => false,
              ),
          'frontend_product' => array(
              'params' => false,
              ),
          'frontend_search' => array(
              'params' => false,
              ),
          'image_thumb' => array(
              'params' => false,
              ),
          'image_upload' => array(
              'params' => false,
              ),
          'orders_collection.filter' => array(
              'params' => false,
              ),
          'orders_collection' => array(
              'params' => false,
              ),
          'product_delete' => array(
              'params' => false,
              ),
          'product_duplicate' => array(
              'params' => false,
              ),
          'product_save' => array(
              'params' => false,
              ),
          'products_collection' => array(
              'params' => false,
              ),
          'reset_complete' => array(
              'params' => false,
              ),
          'reset' => array(
              'params' => false,
              ),
          'rights.config' => array(
              'params' => false,
              ),
          'set_delete' => array(
              'params' => false,
              ),
          'set_save' => array(
              'params' => false,
              ),
          'signup' => array(
              'params' => false,
              ),
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
//public function event($name, &$params = null, $array_keys = null)
// wa-apps/shop/lib/cli/shopFollowup.cli.php:wa()->event('followup_send', $event_params)
// wa-apps/shop/lib/model/shopProduct.model.php:wa()->event('product_delete', $params)
// wa-apps/shop/lib/model/shopProductSkus.model.php:wa('shop')->event('product_sku_delete', $sku)
// wa-apps/shop/lib/model/shopSet.model.php:wa()->event('set_delete', $item)
// wa-apps/shop/lib/model/shopCategory.model.php:wa()->event('category_delete', $item)
// wa-apps/shop/lib/model/shopCurrency.model.php:wa()->event('currency_delete', $params)
// wa-apps/shop/lib/model/shopCartItems.model.php:wa('shop')->event('frontend_products', $event_params)
// wa-apps/shop/lib/model/shopCartItems.model.php:wa('shop')->event('frontend_products', $event_params)
// wa-apps/shop/lib/model/shopCartItems.model.php:wa('shop')->event('frontend_products', $event_params)
// wa-apps/shop/lib/config/shopSitemapConfig.class.php:wa()->event(array($this->app_id, 'sitemap'), $route)
// wa-apps/shop/lib/config/shopRightConfig.class.php:wa()->event('rights.config', $this)
// wa-apps/shop/lib/config/shopConfig.class.php:wa()->event(array($this->application, 'routing'), $route)
// wa-apps/shop/lib/classes/shopProductsCollection.class.php:wa()->event('products_collection', $params)
// wa-apps/shop/lib/classes/shopProductsCollection.class.php:wa('shop')->event('frontend_products', $event_params)
// wa-apps/shop/lib/classes/shopCart.class.php:wa()->event('cart_add', $item)
// wa-apps/shop/lib/classes/shopCart.class.php:wa()->event('cart_delete', $item)
// wa-apps/shop/lib/classes/shopOrdersCollection.class.php:wa()->event('orders_collection.filter', $this)
// wa-apps/shop/lib/classes/shopOrdersCollection.class.php:wa()->event('orders_collection', $params)
// wa-apps/shop/lib/classes/shopDiscounts.class.php:wa('shop')->event('order_calculate_discount', $event_params)
// wa-apps/shop/lib/classes/shopProductMassUpdate.class.php:wa('shop')->event('product_mass_update', $params)
// wa-apps/shop/lib/classes/shopProduct.class.php:wa()->event('product_save', $params)
// wa-apps/shop/lib/classes/shopProduct.class.php:wa()->event('product_duplicate', $params)
// wa-apps/shop/lib/classes/shopImage.class.php:wa()->event('image_thumb', $image)
// wa-apps/shop/lib/handlers/contacts.merge.handler.php:wa('shop')->event('customers_merge', $params)
// wa-apps/shop/lib/handlers/contacts.links.handler.php:wa()->event(array('shop', 'contacts_links'), $links)
// wa-apps/shop/lib/handlers/site.update.route.handler.php:wa('shop')->event(array('shop', 'update.route'), $params)
// wa-apps/shop/lib/handlers/contacts.contacts_collection.handler.php:wa()->event(array('shop', 'customers_collection'), $params)
// wa-apps/shop/lib/handlers/contacts.delete.handler.php:wa()->event(array('shop', 'contacts_delete'), $params)
// wa-apps/shop/lib/workflow/shopWorkflowAction.class.php:wa('shop')->event('order_action_form.'.$action_id, $data)
// wa-apps/shop/lib/workflow/shopWorkflowAction.class.php:wa('shop')->event('order_action.'.$this->getId(), $data)
// wa-apps/shop/lib/workflow/shopWorkflowCreateAction.class.php:wa()->event('signup', $contact)
// wa-apps/shop/lib/workflow/shopWorkflowCreateAction.class.php:wa('shop')->event('order_action.create', $data)
// wa-apps/shop/lib/actions/product/shopProductImageUpload.controller.php:wa()->event('image_upload', $image)
// wa-apps/shop/lib/actions/product/shopProductRelated.action.php:wa()->event('backend_product_edit', $product))
// wa-apps/shop/lib/actions/product/shopProductImages.action.php:wa()->event('backend_product_edit', $product))
// wa-apps/shop/lib/actions/product/shopProductSkuSettings.action.php:wa()->event('backend_product_sku_settings', $event_params))
// wa-apps/shop/lib/actions/product/shopProduct.action.php:wa()->event('backend_product', $product, array()))
// wa-apps/shop/lib/actions/product/shopProduct.action.php:wa()->event('backend_product_edit', $product))
// wa-apps/shop/lib/actions/products/shopProducts.action.php:wa()->event('backend_products', $event_params))
// wa-apps/shop/lib/actions/products/shopProductsSaveListSettings.controller.php:wa()->event('category_save', $data)
// wa-apps/shop/lib/actions/products/shopProductsSaveListSettings.controller.php:wa()->event('set_save', $data)
// wa-apps/shop/lib/actions/csv/shopCsvProductupload.controller.php:wa('shop')->event('product_custom_fields')
// wa-apps/shop/lib/actions/csv/shopCsvProductrun.controller.php:wa()->event('image_upload', $image)
// wa-apps/shop/lib/actions/backend/shopBackendOrders.action.php:wa()->event('backend_orders')
// wa-apps/shop/lib/actions/backend/shopBackendOrders.action.php:wa('shop')->event('backend_reports_channels', $channel_names)
// wa-apps/shop/lib/actions/backend/shopBackendReports.action.php:wa()->event('backend_reports'))
// wa-apps/shop/lib/actions/backend/shopBackendSettings.action.php:wa()->event('backend_settings'))
// wa-apps/shop/lib/actions/backend/shopBackendWelcome.action.php:wa()->event('backend_welcome')
// wa-apps/shop/lib/actions/backend/shopBackendProducts.action.php:wa()->event('backend_products'))
// wa-apps/shop/lib/actions/order/shopOrder.action.php:wa('shop')->event('backend_reports_channels', $result)
// wa-apps/shop/lib/actions/order/shopOrderEdit.action.php:wa()->event('backend_order_edit', $order))
// wa-apps/shop/lib/actions/frontend/shopFrontendProductReviews.action.php:wa()->event('frontend_product', $product, array('menu','cart','block_aux','block')))
// wa-apps/shop/lib/actions/frontend/shopFrontendProduct.action.php:wa('shop')->event('frontend_products', $event_params)
// wa-apps/shop/lib/actions/frontend/shopFrontendProduct.action.php:wa()->event('frontend_product', $product, array('menu', 'cart', 'block_aux', 'block')))
// wa-apps/shop/lib/actions/frontend/shopFrontendCart.action.php:wa()->event('frontend_cart'))
// wa-apps/shop/lib/actions/frontend/shopFrontendTag.action.php:wa()->event('frontend_search'))
// wa-apps/shop/lib/actions/frontend/shopFrontendCategory.action.php:wa()->event('frontend_category', $category))
// wa-apps/shop/lib/actions/frontend/shopFrontendCategory.action.php:wa('shop')->event('frontend_products', $event_params)
// wa-apps/shop/lib/actions/frontend/shopFrontendCheckout.action.php:wa()->event('frontend_checkout', $event_params))
// wa-apps/shop/lib/actions/frontend/shopFrontendCheckout.action.php:wa('shop')->event('frontend_checkout_stock_rules', $event_params)
// wa-apps/shop/lib/actions/frontend/my/shopFrontendMyOrders.action.php:wa()->event('frontend_my_orders', $orders))
// wa-apps/shop/lib/actions/frontend/my/shopFrontendMyOrder.action.php:wa()->event('frontend_my_order', $order))
// wa-apps/shop/lib/actions/frontend/my/shopFrontendMyAffiliate.action.php:wa()->event('frontend_my_affiliate'))
// wa-apps/shop/lib/actions/frontend/my/shopFrontendMy.action.php:wa()->event('frontend_my'))
// wa-apps/shop/lib/actions/frontend/shopFrontendSearch.action.php:wa()->event('frontend_search'))
// wa-apps/shop/lib/actions/frontend/shopFrontend.action.php:wa()->event('frontend_homepage'))
// wa-apps/shop/lib/actions/frontend/shopFrontend.action.php:wa()->event('frontend_nav'))
// wa-apps/shop/lib/actions/frontend/shopFrontend.action.php:wa()->event('frontend_nav_aux'))
// wa-apps/shop/lib/actions/frontend/shopFrontend.action.php:wa()->event('frontend_error', $e)
// wa-apps/shop/lib/actions/frontend/shopFrontendPage.action.php:wa()->event('frontend_nav'))
// wa-apps/shop/lib/actions/frontend/shopFrontendPage.action.php:wa()->event('frontend_nav_aux'))
// wa-apps/shop/lib/actions/frontend/shopFrontendPage.action.php:wa()->event('frontend_error', $e)
// wa-apps/shop/lib/actions/frontend/shopFrontendProductPage.action.php:wa()->event('frontend_product', $product, array('menu','cart','block_aux','block')))
// wa-apps/shop/lib/actions/reports/shopReportsSales.action.php:wa('shop')->event('backend_reports_channels', $result)
// wa-apps/shop/lib/actions/tutorial/shopTutorial.actions.php:wa()->event('backend_tutorial_page', $params)
// wa-apps/shop/lib/actions/tutorial/shopTutorial.actions.php:wa('shop')->event('backend_tutorial')
// wa-apps/shop/lib/actions/customers/shopCustomersInfo.action.php:wa()->event('backend_customer', $customer))
// wa-apps/shop/lib/actions/customers/shopCustomersList.action.php:wa()->event('backend_customers_list', $params))
// wa-apps/shop/lib/actions/customers/shopCustomers.action.php:wa()->event('backend_customers'))
// wa-apps/shop/lib/actions/settings/affiliate/shopSettingsAffiliate.action.php:wa()->event('backend_settings_affiliate')
// wa-apps/shop/lib/actions/settings/discount/shopSettingsDiscounts.action.php:wa()->event('backend_settings_discounts')
// wa-apps/shop/lib/actions/settings/followups/shopSettingsFollowups.action.php:wa()->event('followup_delete', $f)
// wa-apps/shop/lib/actions/settings/followups/shopSettingsFollowups.action.php:wa()->event('followup_save', $f)
// wa-apps/shop/lib/actions/settings/followups/shopSettingsFollowups.action.php:wa()->event('backend_followup_edit', $followup))
// wa-apps/shop/lib/actions/settings/stock/shopSettingsStock.action.php:wa('shop')->event('backend_settings_stocks', $params)
// wa-apps/shop/lib/actions/settings/shopSettingsReset.action.php:wa()->event('reset')
// wa-apps/shop/lib/actions/settings/shopSettingsReset.action.php:wa()->event('reset_complete')
// wa-apps/shop/lib/actions/settings/notifications/shopSettingsNotificationsSave.controller.php:wa()->event('backend_notification_save', $event_params)
// wa-apps/shop/lib/actions/settings/notifications/shopSettingsNotificationsEdit.action.php:wa()->event('backend_notification_edit', $event_params))
// wa-apps/shop/lib/actions/settings/notifications/shopSettingsNotificationsAdd.action.php:wa()->event('backend_notification_add'))
// wa-apps/shop/lib/actions/settings/images/shopSettingsImagesRegenerate.controller.php:wa()->event('image_upload', $image)
// wa-apps/shop/lib/actions/shopMyNav.action.php:wa()->event('frontend_my_nav'))
// wa-apps/shop/lib/actions/dialog/shopDialogProductListSettings.action.php:wa()->event('backend_category_dialog', $settings))
// wa-apps/shop/lib/actions/dialog/shopDialogProductListSettings.action.php:wa()->event('backend_set_dialog', $settings))
// wa-apps/shop/lib/layouts/shopBackend.layout.php:wa()->event('backend_menu')
// wa-apps/shop/lib/layouts/shopFrontend.layout.php:wa()->event('frontend_head'))
// wa-apps/shop/lib/layouts/shopFrontend.layout.php:wa()->event('frontend_header'))
// wa-apps/shop/lib/layouts/shopFrontend.layout.php:wa()->event('frontend_nav'))
// wa-apps/shop/lib/layouts/shopFrontend.layout.php:wa()->event('frontend_nav_aux'))
// wa-apps/shop/lib/layouts/shopFrontend.layout.php:wa()->event('frontend_footer'))
// wa-apps/shop/plugins/migrate/lib/transport/shopMigrateTransport.class.php:wa()->event('image_upload', $image)
