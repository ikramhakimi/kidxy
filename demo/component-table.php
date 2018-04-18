<?php
$trips = array(
    '1' => 'Kuala Lumpur(SZB) - Amsterdam (AMS)',
    '2' => 'Bangkok (BKK) - Milan (MIL)',
    '3' => 'Osaka (KIX) - London (LCY)'
);

$price = array(
    '1' => 'MYR 680.85',
    '2' => 'MYR 2,502.30',
    '3' => 'MYR 1,722.48'
);
$trip = array(
    '1' => 'Return',
    '2' => 'One Way'
);
$date = array(
    '1' => 'March 21, 2018',
    '2' => 'April 2, 2019'
);
?>


<section class="c-card  u-margin-bottom-lg">
    <div class="u-padding-xl">
        <h3 class="u-text-4  u-text-bold">Table</h3>

        <div>Tables include default styles for tables and data sets.</div>
    </div>

    <section class="presentation__specimen">
        <div class="o-grid">
            <div class="o-grid__item  u-width-1/3">
                <h4 class="u-text-6  u-color-muted  u-margin-none">Basic</h4>
            </div>

            <div class="o-grid__item  u-width-2/3">
                <table class="c-table">
                    <thead>
                        <tr>
                            <th class="is--tight"><div class="c-check  c-check--static"><input type="checkbox"></div></th>
                            <th class="is--tight"></th>
                            <th>Direction</th>
                            <th>Trip</th>
                            <th>Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($count=1; $count<4; $count++) { ?>
                            <tr>
                                <td class="is--tight"><div class="c-check  c-check--static"><input type="checkbox"></div></td>
                                <td><span class="c-avatar  c-avatar--32"><img src="images/avatars/avatar-<?=rand(1,3)?>.png"></span></td>
                                <td>
                                    <div><?=$trips[$count];?></div>
                                    <div class="u-color-muted"><?=$date[rand(1,2)];?></div>
                                </td>
                                <td><?=$trip[rand(1,2)];?></td>
                                <td class="is--tight"><a href="#" class="c-btn  c-btn--sm  c-btn--primary">Book Now</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <hr class="u-divider  u-margin-ends-lg">

        <div class="o-grid">
            <div class="o-grid__item  u-width-1/3">
                <h4 class="u-text-6  u-color-muted  u-margin-none">Vertical Alignment</h4>
            </div>

            <div class="o-grid__item  u-width-2/3">
                <table class="c-table">
                    <thead>
                        <tr>
                            <th class="is--tight"><div class="c-check  c-check--static"><input type="checkbox"></div></th>
                            <th class="is--tight"></th>
                            <th>Direction</th>
                            <th>Trip</th>
                            <th>Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($count=1; $count<3; $count++) { ?>
                            <tr>
                                <td valign="middle" class="is--tight"><div class="c-check  c-check--static"><input type="checkbox"></div></td>
                                <td valign="middle"><span class="c-avatar  c-avatar--32"><img src="images/avatars/avatar-<?=rand(1,3)?>.png"></span></td>
                                <td valign="middle">
                                    <div><?=$trips[$count];?></div>
                                    <div class="u-color-muted"><?=$date[rand(1,2)];?></div>
                                </td>
                                <td valign="middle"><?=$trip[rand(1,2)];?></td>
                                <td valign="middle" class="is--tight"><a href="#" class="c-btn  c-btn--sm  c-btn--primary">Book Now</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <table class="c-table  u-margin-top-lg">
                    <thead>
                        <tr>
                            <th class="is--tight"><div class="c-check  c-check--static"><input type="checkbox"></div></th>
                            <th class="is--tight"></th>
                            <th>Direction</th>
                            <th>Trip</th>
                            <th>Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($count=1; $count<3; $count++) { ?>
                            <tr>
                                <td valign="bottom" class="is--tight"><div class="c-check  c-check--static"><input type="checkbox"></div></td>
                                <td valign="bottom"><span class="c-avatar  c-avatar--32"><img src="images/avatars/avatar-<?=rand(1,3)?>.png"></span></td>
                                <td valign="bottom">
                                    <div><?=$trips[$count];?></div>
                                    <div class="u-color-muted"><?=$date[rand(1,2)];?></div>
                                </td>
                                <td valign="bottom"><?=$trip[rand(1,2)];?></td>
                                <td valign="bottom" class="is--tight"><a href="#" class="c-btn  c-btn--sm  c-btn--primary">Book Now</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <hr class="u-divider  u-margin-ends-lg">

        <div class="o-grid">
            <div class="o-grid__item  u-width-1/3">
                <h4 class="u-text-6  u-color-muted  u-margin-none">Card <span class="u-muted  u-text-light  u-margin-sides-xs">×</span> Hover</h4>
            </div>

            <div class="o-grid__item  u-width-2/3">
                <div class="c-card">
                    <div class="c-card__table">
                        <table class="c-table">
                            <thead>
                                <tr>
                                    <th class="is--tight"><div class="c-check  c-check--static"><input type="checkbox"></div></th>
                                    <th class="is--tight"></th>
                                    <th>Direction</th>
                                    <th>Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($count=1; $count<4; $count++) { ?>
                                    <tr>
                                        <td class="is--tight"><div class="c-check  c-check--static"><input type="checkbox"></div></td>
                                        <td><span class="c-avatar  c-avatar--32"><img src="images/avatars/avatar-<?=rand(1,3)?>.png"></span></td>
                                        <td>
                                            <div><?=$trips[$count];?></div>
                                            <div class="u-color-muted"><?=$date[rand(1,2)];?></div>
                                        </td>
                                        <td class="is--tight"><a href="#" class="c-btn  c-btn--sm  c-btn--primary">Book Now</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <hr class="u-divider  u-margin-ends-lg">

        <div class="o-grid">
            <div class="o-grid__item  u-width-1/3">
                <h4 class="u-text-6  u-color-muted  u-margin-none">Card <span class="u-muted  u-text-light  u-margin-sides-xs">×</span> Table with hover state</h4>
            </div>

            <div class="o-grid__item  u-width-2/3">
                <div class="c-card">
                    <div class="c-card__table">
                        <table class="c-table  c-table--hover">
                            <thead>
                                <tr>
                                    <th class="is--tight"><div class="c-check  c-check--static"><input type="checkbox"></div></th>
                                    <th class="is--tight"></th>
                                    <th>Direction</th>
                                    <th>Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($count=1; $count<4; $count++) { ?>
                                    <tr>
                                        <td class="is--tight"><div class="c-check  c-check--static"><input type="checkbox"></div></td>
                                        <td><span class="c-avatar  c-avatar--32"><img src="images/avatars/avatar-<?=rand(1,3)?>.png"></span></td>
                                        <td>
                                            <div><?=$trips[$count];?></div>
                                            <div class="u-color-muted"><?=$date[rand(1,2)];?></div>
                                        </td>
                                        <td class="is--tight"><a href="#" class="c-btn  c-btn--sm  c-btn--primary">Book Now</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
