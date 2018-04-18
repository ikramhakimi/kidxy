<?php
    include 'views/templates/head.php';


?>

<?php
$components = array(
            'Avatar',
            'Breadcrumb',
            'Button',
            'Card',
            'Chips',
            'Collapse',
            'Dropdown',
            'Form',
            'Modal',
            'Pagination',
            'Rating',
            'Table',
            'Tabs',
            'Tooltip',
        );
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
                    <li>Components</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="o-container">
    <section class="c-card  u-margin-ends-lg">
        <div class="u-padding-xl">
            <h3 class="u-text-4  u-text-bold">Overview</h3>
            <ul class="o-list  o-grid">
                <?php foreach ($components as $component) { ?>
                <li class="o-grid__item  o-list__item  u-width-1/4  u-margin-top-md"><a href="#<?php print (str_replace(' ', '-', strtolower($component))); ?>"><?=$component?></a></li>
                <?php } ?>
            </ul>
        </div>
    </section>

    <a name="avatar" class="presentation__anchor">Anchor</a>
    <?php include 'demo/component-avatar.php'; ?>

    <a name="breadcrumb" class="presentation__anchor">Anchor</a>
    <?php include 'demo/component-breadcrumb.php'; ?>

    <a name="button" class="presentation__anchor">Anchor</a>
    <?php include 'demo/component-button.php'; ?>

    <a name="card" class="presentation__anchor">Anchor</a>
    <?php include 'demo/component-card.php'; ?>

    <a name="chips" class="presentation__anchor">Anchor</a>
    <?php include 'demo/component-chips.php'; ?>

    <a name="collapse" class="presentation__anchor">Anchor</a>
    <?php include 'demo/component-collapse.php'; ?>

    <a name="dropdown" class="presentation__anchor">Anchor</a>
    <?php include 'demo/component-dropdown.php'; ?>

    <a name="form" class="presentation__anchor">Anchor</a>
    <?php include 'demo/component-form.php'; ?>

    <a name="modal" class="presentation__anchor">Anchor</a>
    <?php include 'demo/component-modal.php'; ?>

    <a name="pagination" class="presentation__anchor">Anchor</a>
    <?php include 'demo/component-pagination.php'; ?>

    <a name="rating" class="presentation__anchor">Anchor</a>
    <?php include 'demo/component-rating.php'; ?>

    <a name="table" class="presentation__anchor">Anchor</a>
    <?php include 'demo/component-table.php'; ?>

    <a name="tabs" class="presentation__anchor">Anchor</a>
    <?php include 'demo/component-tabs.php'; ?>

    <a name="tooltip" class="presentation__anchor">Anchor</a>
    <?php include 'demo/component-tooltip.php'; ?>
</div>


<?php include 'views/templates/foot.php'; ?>

<script>
$('.js-shake-modal').click(function() {
    $('.c-dialog--register').toggleClass('is--shaking');
    $(this).toggleClass('is--loading');
});

// Select all links with hashes
$('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.not('[data-toggle="collapse"]')
.not('[data-toggle="tab"]')
.click(function(event) {
    // On-page links
    if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
    ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1000, function() {
                // Callback after animation
                // Must change focus!
                var $target = $(target);
                $target.focus();
                if ($target.is(":focus")) { // Checking if the target was focused
                    return false;
                } else {
                    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                    $target.focus(); // Set focus again
                };
            });
        }
    }
});
</script>
