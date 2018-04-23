<?php
$product_discount = isset($product_discount) ? $product_discount : false;
$product_image = rand(1,8);
$product_thumb_ratio = isset($product_thumb_ratio) ? $product_thumb_ratio : '4x3';
?>
<div class="c-card  c-card--product-small">
    <a href="#" class="c-card__image  u-block">
        <div class="o-embed  o-embed--<?=$product_thumb_ratio?>">
            <img src="images/mockup/activity-<?=$product_image?>.jpg">
        </div>
    </a>
    <div class="c-card__body">
        <?php include 'views/product/_title-small.php'; ?>
        <?php include 'views/product/_age.php'; ?>
        <?php include 'views/product/_location.php'; ?>
        <?php
              if ($product_discount) {
                  include 'views/product/_price-show-discount.php';
              } else {
                  include 'views/product/_price.php';
              }
        ?>
        <?php include 'views/product/_supplier.php'; ?>
    </div>
</div>
