<?php
    $section_name = 'Categories';
    $section_link = 'categories.php';

    $categories = array(
        'Attraction, Indoor & Outdoor Play',
        'Arts, Crafts & Cooking',
        'Sports',
        'Science, Technology & Culture',
        'Music & Rhythm',
        'Languages',
    );
?>
<section class="c-section  c-section--categories  u-margin-ends-xl">
    <div class="o-container">
        <?php include 'views/components/headline-section.php'; ?>

        <div class="c-carousel  c-carousel--cards  owl-carousel  u-align-center  js-carousel-cards-6">
            <?php foreach ($categories as $category) { ?>
                <div class="item">
                    <?php include 'views/product/card-category-small.php'; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php
unset(
    $section_name,
    $section_link
);
?>
