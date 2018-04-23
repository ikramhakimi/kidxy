<?php
    $css_class = isset($css_class) ? $css_class : false;
?>

<a href="#" class="c-card  c-card--category-small<?=$css_class?>">
    <div class="c-card__image">
        <div class="o-embed  o-embed--16x9">
            <img src="images/mockup/activity-<?=rand(1,8)?>.jpg">
        </div>
    </div>
    <div class="c-card__body">
        <h3 class="c-card__title  u-text-6  u-margin-none">
            <?=$category?>
        </h3>
    </div>
</a>
