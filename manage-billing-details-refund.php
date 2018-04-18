<?php
include 'views/templates/head.php';
include 'views/templates/toolbar.php';

$page = "manage-billing";
?>


<div class="o-container  u-margin-ends-xl">
    <div class="o-grid  o-grid--lg">
        <div class="o-grid__item  u-width-1/4  u-width-1@mobile">
            <?php include 'views/account/sidebar.php'; ?>
        </div>
        <div class="o-grid__item  u-width-3/4  u-width-1@mobile  u-margin-top-lg@mobile">
            <?php include 'views/account/billing-details-paid.php'; ?>
        </div>
    </div>
</div>


<?php
include 'views/templates/footer.php';
include 'views/templates/foot.php';
