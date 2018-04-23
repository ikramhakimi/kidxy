<?php
    $section_name = isset($section_name) ? $section_name : 'Official Partners';
    $section_link = isset($section_link) ? $section_link : false;
    $section_link_title = isset($section_link_title) ? $section_link_title : 'View All';
    $section_cards = isset($section_cards) ? $section_cards : 3;
?>
<section class="c-section  c-section--product-carousel  u-margin-ends-xl">
    <div class="o-container">
        <?php include 'views/components/headline-section.php'; ?>

        <div class="o-grid">
            <?php for($count=0; $count<$section_cards; $count++) { ?>
                <div class="o-grid__item  u-width-1/<?=$section_cards?>">
                    <?php include 'views/product/card-partner.php'; ?>
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
    $section_cards
);
?>
