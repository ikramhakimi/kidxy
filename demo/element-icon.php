<section class="c-card  u-margin-bottom-lg">
    <div class="u-padding-xl">
        <h3 class="u-text-4  u-text-bold">Icon</h3>

        Covering responsive, fixed size, contain and cover behaviour
    </div>
    <section class="presentation__specimen">
        <div class="o-grid">
            <div class="o-grid__item  u-width-1/3">
                <h4 class="u-text-6  u-color-muted  u-margin-none">Display</h4>
            </div>

            <div class="o-grid__item  u-width-2/3">
                <div>
                    <span class="icon  icon--20  icon--poll"></span>
                    <span>
                        Default, icon display as a block.
                    </span>
                </div>

                <hr class="u-divider  u-margin-ends-lg">

                <div>
                    <span class="icon  icon--20  icon--poll  icon--inline"></span>
                    <span>
                        use <code>.icon--inline</code> to display inline icon.
                    </span>
                </div>
            </div>
        </div>


        <hr class="u-divider  u-margin-ends-lg">


        <div class="o-grid">
            <div class="o-grid__item  u-width-1/3">
                <h4 class="u-text-6  u-color-muted  u-margin-none">Sizes</h4>
            </div>

            <div class="o-grid__item  u-width-2/3">
                <div class="o-tile">
                    <?php
                    $icon_sizes = array('16','20','24','32','48','64');

                    foreach ($icon_sizes as $size) {
                        ?>
                        <div class="o-tile__item  u-width-1/6">
                            <div>
                                <span class="icon  icon--<?=$size?>  icon--poll"></span>
                            </div>
                            <div class="u-text-8  u-color-muted  u-margin-top-xs">
                                <?=$size?> <span class="u-muted  u-text-light">×</span> <?=$size?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>


        <hr class="u-divider  u-margin-ends-lg">


        <div class="o-grid">
            <div class="o-grid__item  u-width-1/3">
                <h4 class="u-text-6  u-color-muted  u-margin-none">Colors</h4>
            </div>

            <div class="o-grid__item  u-width-2/3">
                <div style="width:100%;height:0;padding-bottom:99%;position:relative;"><iframe src="https://giphy.com/embed/3oriO0OEd9QIDdllqo" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
                Work in progress. Be right back
            </div>
        </div>


        <hr class="u-divider  u-margin-ends-lg">


        <div class="o-grid">
            <div class="o-grid__item  u-width-1/3">
                <h4 class="u-text-6  u-color-muted  u-margin-none">Navigation</h4>
            </div>

            <div class="o-grid__item  u-width-2/3">
                <?php
                $icon_direction = array(
                    'icon--arrow-left',
                    'icon--arrow-down',
                    'icon--arrow-right',
                    'icon--arrow-up',
                    'icon--caret-down',
                    'icon--caret-up',
                    'icon--chevron-down',
                    'icon--chevron-left',
                    'icon--chevron-right',
                    'icon--chevron-up',
                    'icon--menu',
                    'icon--apps',
                );

                foreach ($icon_direction as $icon) {
                    ?>
                    <div class="c-tooltip" style="display: inline-block; float: left; padding: 16px; margin: 4px; border-radius: 4px; border: 1px solid #dfe2eb;" data-tooltip="<?=$icon?>">
                        <span class="icon  icon--20  <?=$icon?>"></span>
                    </div>
                <?php } ?>
            </div>
        </div>


        <hr class="u-divider  u-margin-ends-lg">


        <div class="o-grid">
            <div class="o-grid__item  u-width-1/3">
                <h4 class="u-text-6  u-color-muted  u-margin-none">Actions</h4>
            </div>

            <div class="o-grid__item  u-width-2/3">
                <?php
                $icon_direction = array(
                    'icon--search',
                    'icon--attachment',
                    'icon--add',
                    'icon--check',
                    'icon--check-circle',
                    'icon--close',
                    'icon--compare',
                    'icon--share',
                    'icon--star',
                    'icon--attachment',
                    'icon--favorite-outline',
                    'icon--favorite',
                    'icon--pencil',
                    'icon--delete',
                    'icon--mail',
                    'icon--settings',
                    'icon--send',
                    'icon--flag',
                    'icon--view',
                    'icon--camera',
                    'icon--open-window',
                    'icon--exit',
                );

                foreach ($icon_direction as $icon) {
                    ?>
                    <div class="c-tooltip" style="display: inline-block; float: left; padding: 16px; margin: 4px; border-radius: 4px; border: 1px solid #dfe2eb;" data-tooltip="<?=$icon?>">
                        <span class="icon  icon--20  <?=$icon?>"></span>
                    </div>
                <?php } ?>
            </div>
        </div>


        <hr class="u-divider  u-margin-ends-lg">


        <div class="o-grid">
            <div class="o-grid__item  u-width-1/3">
                <h4 class="u-text-6  u-color-muted  u-margin-none">Media</h4>
            </div>

            <div class="o-grid__item  u-width-2/3">
                <?php
                $icon_direction = array(

                    'icon--camera',
                    'icon--video',
                    'icon--photo',
                    'icon--folder',
                    'icon--device-desktop',
                    'icon--device-tablet',
                    'icon--device-phone',

                );

                foreach ($icon_direction as $icon) {
                    ?>
                    <div class="c-tooltip" style="display: inline-block; float: left; padding: 16px; margin: 4px; border-radius: 4px; border: 1px solid #dfe2eb;" data-tooltip="<?=$icon?>">
                        <span class="icon  icon--20  <?=$icon?>"></span>
                    </div>
                <?php } ?>
            </div>
        </div>


        <hr class="u-divider  u-margin-ends-lg">


        <div class="o-grid">
            <div class="o-grid__item  u-width-1/3">
                <h4 class="u-text-6  u-color-muted  u-margin-none">Objects</h4>
            </div>

            <div class="o-grid__item  u-width-2/3">
                <?php
                $icon_direction = array(
                    'icon--briefcase',
                    'icon--clock-fill',
                    'icon--compass',
                    'icon--hot',
                    'icon--location',
                    'icon--timelapse',
                    'icon--user',
                    'icon--verified-sheild',
                );

                foreach ($icon_direction as $icon) {
                    ?>
                    <div class="c-tooltip" style="display: inline-block; float: left; padding: 16px; margin: 4px; border-radius: 4px; border: 1px solid #dfe2eb;" data-tooltip="<?=$icon?>">
                        <span class="icon  icon--20  <?=$icon?>"></span>
                    </div>
                <?php } ?>
            </div>
        </div>


        <hr class="u-divider  u-margin-ends-lg">


        <div class="o-grid">
            <div class="o-grid__item  u-width-1/3">
                <h4 class="u-text-6  u-color-muted  u-margin-none">Response</h4>
            </div>

            <div class="o-grid__item  u-width-2/3">
                <?php
                $icon_direction = array(
                    'icon--check-circle',
                    'icon--error',
                    'icon--info',
                    'icon--warning',
                    'icon--timelapse',
                    'icon--notifications',
                );

                foreach ($icon_direction as $icon) {
                    ?>
                    <div class="c-tooltip" style="display: inline-block; float: left; padding: 16px; margin: 4px; border-radius: 4px; border: 1px solid #dfe2eb;" data-tooltip="<?=$icon?>">
                        <span class="icon  icon--20  <?=$icon?>"></span>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</section>
