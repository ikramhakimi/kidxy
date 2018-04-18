<?php
    include 'views/templates/head.php';


?>

<div class="c-toolbar">
    <div class="o-container  o-container--fluid">
        <div class="c-toolbar__tile  o-tile  o-tile--lg  o-tile--middle">
            <div class="o-tile__left">
                <span class="c-toolbar__icon  c-avatar  c-avatar--entity  icon  icon--20  icon--muted  icon--compass"></span>
            </div>
            <div class="o-tile__body">
                <ul class="c-toolbar__title  c-breadcrumb">
                    <li>Documentation</li>
                    <li>Elements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="o-container  u-margin-ends-lg">
    <a name="colors" class="presentation__anchor">Anchor</a>
    <?php include 'demo/element-colors.php'; ?>

    <a name="typography" class="presentation__anchor">Anchor</a>
    <?php include 'demo/element-typography.php'; ?>

    <a name="media" class="presentation__anchor">Anchor</a>
    <?php include 'demo/element-media.php'; ?>

    <a name="icon" class="presentation__anchor">Anchor</a>
    <?php include 'demo/element-icon.php'; ?>
</div>


<?php include 'views/templates/foot.php'; ?>
