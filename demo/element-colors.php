<section class="c-card  u-margin-bottom-lg">
    <div class="u-padding-xl">
        <h3 class="u-text-4  u-text-bold">Colors</h3>

        Covering responsive, fixed size, contain and cover behaviour
    </div>
    <section class="presentation__specimen">
        <div class="o-grid">
            <div class="o-grid__item  u-width-1/3">
                <h4 class="u-text-6  u-color-muted  u-margin-none">Display</h4>
            </div>

            <div class="o-grid__item  u-width-2/3">
                <?php
                    $colors = array(
                                    'haze',
                                    'dark',
                                    'red',
                                    'green',
                                    'blue-light',
                                    'blue',
                                    'orange',
                                    'yellow',
                                    'pink',
                                    'purple',

                                );

                    $variations = array(
                                    '100',
                                    '200',
                                    '300',
                                    '400',
                                    '500',
                                    '600',
                                    '700',
                                )

                ?>
                <? foreach ($colors as $color) { ?>
                    <?=$color?>
                    <div class="o-tile  u-margin-top-xs  u-margin-bottom-sm">
                        <? foreach ($variations as $variation) { ?>

                            <div class="o-tile__item" style="padding-right: 5px">
                                <div class="c-tooltip  color  <?=$color?>-<?=$variation?>"  data-tooltip="<?=$color?>-<?=$variation?>"></div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</section>
