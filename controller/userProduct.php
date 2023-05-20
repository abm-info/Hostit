<?php
require_once('./model/product.php');
$products = fetch_products();
require_once('./views/userProduct.php');
