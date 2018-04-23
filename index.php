<?php
include 'views/templates/head.php';
include 'views/templates/toolbar.php';


    // include 'views/product/section-promoted.php';
    // include 'views/product/section-partners.php';


    $section_cards = 5;
    $product_thumb_ratio = '16x9';
    include 'views/product/section-products.php';


    $carousel_cards = 4;
    $product_discount = true;
    $product_thumb_ratio = '16x9';
    include 'views/product/section-products-carousel.php';


    $carousel_cards = 5;
    $product_thumb_ratio = '16x9';
    include 'views/product/section-products-carousel.php';


    include 'views/product/section-categories.php';


    $carousel_cards = 4;
    $product_discount = true;
    $product_thumb_ratio = '16x9';
    include 'views/product/section-products-carousel.php';


include 'views/templates/footer.php';
include 'views/templates/foot.php';
