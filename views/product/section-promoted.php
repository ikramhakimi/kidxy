<?php
    $categories = array(
        'Just For You',
        'Best Sellers',
        'Gift Cards',
        'On Sale',
        'Activities For 0 - 4 years',
        'Activities For 5 - 10 years',
        'Activities For 10 & Above',
    );
?>
<section class="c-section  c-section--promoted  u-margin-ends-xl">
    <div class="o-container">
        <div class="o-flex  o-flex--md">
            <div class="c-promoted-categories  c-card  o-flex__item  u-width-1/4">
                <ul class="o-list">
                    <?php foreach ($categories as $category) { ?>
                        <li class="o-list__item"><a href="#" class="u-color-base  u-text-5  u-text-semibold"><?=$category?></a></li>
                    <?php } ?>
                </ul>
            </div>

            <div class="c-promoted-products  c-card  o-flex__item  o-flex__item--auto">
                <div class="o-flex">
                    <div class="o-flex__item  o-flex__item--auto">
                        <div class="o-embed  o-embed--16x9"></div>
                    </div>
                    <div class="o-flex__item">
                        <h3>
                            <a href="#">
                                Enerz Extreme Park - Weekdays Entrance (Exclude Public Holiday & School Holiday)
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
unset(
    $section_name,
    $section_link
);
?>
