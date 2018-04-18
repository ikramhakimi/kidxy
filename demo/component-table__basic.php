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
<table class="c-table">
    <thead>
        <tr>
            <th class="is--tight"><div class="c-check  c-check--static"><input type="checkbox"></div></th>
            <th>Direction</th>
            <th>Trip</th>
            <th>Handle</th>
        </tr>
    </thead>
    <tbody>
        <?php for($count=1; $count<4; $count++) { ?>
            <tr>
                <td class="is--tight"><div class="c-check  c-check--static"><input type="checkbox"></div></td>
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
