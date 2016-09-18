<?php


include(dirname(__FILE__) . '/libs/ApiResource.php');
// Marketcloud singleton
include(dirname(__FILE__) . '/libs/Marketcloud.php');





// Marketcloud API Resources
include(dirname(__FILE__) . '/libs/Products.php');
include(dirname(__FILE__) . '/libs/Categories.php');
include(dirname(__FILE__) . '/libs/Brands.php');
include(dirname(__FILE__) . '/libs/Orders.php');
include(dirname(__FILE__) . '/libs/Shippings.php');
include(dirname(__FILE__) . '/libs/Payments.php');
include(dirname(__FILE__) . '/libs/BraintreePayments.php');
include(dirname(__FILE__) . '/libs/Carts.php');
include(dirname(__FILE__) . '/libs/Promotions.php');
include(dirname(__FILE__) . '/libs/Users.php');

?>
