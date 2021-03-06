<?php
    $section_name = isset($section_name) ? $section_name : 'Section Product';
    $section_link = isset($section_link) ? $section_link : false;
    $section_link_title = isset($section_link_title) ? $section_link_title : 'View All';
    $section_cards = isset($section_cards) ? $section_cards : 4;
?>
<section class="c-section  c-section--product  u-margin-ends-xl">
    <div class="o-container">
        <?php include 'views/components/headline-section.php'; ?>

        <div class="c-carousel  c-carousel--cards  owl-carousel  js-carousel-cards-<?=$section_cards?>">
            <?php for($count=0; $count<$section_cards; $count++) { ?>
                <div class="item">
                    <?php include 'views/product/card-product-small.php'; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php
unset(
    $section_name,
    $section_link,
    $section_link_title,
    $section_cards,
    $product_discount
);
?>
