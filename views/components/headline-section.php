<?php
    $section_name = isset($section_name) ? $section_name : 'Section Name';
    $section_link = isset($section_link) ? $section_link : false;
    $section_link_title = isset($section_link_title) ? $section_link_title : 'View All';
?>
<div class="c-headline  o-tile  o-tile--middle  u-margin-bottom-md">
    <div class="o-tile__body">
        <h2 class="u-text-5  u-margin-none"><a href="#" class="u-color-base"><?=$section_name?></a></h2>
    </div>
    <?php if($section_link) { ?>
    <div class="o-tile__right">
        <a href="<?=$section_link?>" class="u-block">
            <?=$section_link_title?>
            <span class="icon  icon--inline-block  icon--chevron-right"></span>
        </a>
    </div>
    <?php } ?>
</div>
