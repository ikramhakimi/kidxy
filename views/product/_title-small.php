<?php
    $product_title  = array(
                        '1' => 'Dish by Ili - Cooking Workshop for Kids',
                        '2' => 'KLCC Aquaria',
                        '3' => 'T-Shirt Karnival Semarak Autisme',
                        '4' => 'Al-Quran Reading',
                        '5' => 'Ballet Class for Beginner',
                        '6' => 'Art & Science Activity - Oil & Water: Can we be friends?',
                    );
    $random         = rand(1,6)
?>
<h3 class="c-product__title  c-product__title--sm  u-text-6  u-margin-bottom-sm">
    <a href="#" class="u-color-dark"><?=$product_title[$random]?></a>
</h3>
