<section class="c-card  u-margin-bottom-lg">
    <div class="u-padding-xl">
        <h3 class="u-text-4  u-text-bold">Modal</h3>

        <p>Modals are flexible dialog prompts.</p>
        <div>Using Bootstrap 3.3 <ins>modal.js</ins></div>
    </div>

    <section class="presentation__specimen">
        <div class="o-grid">
            <div class="o-grid__item  u-width-1/3">
                <h4 class="u-text-6  u-color-muted  u-margin-none">Layout</h4>
            </div>
            <div class="o-grid__item  u-width-2/3">
                <div class="c-backdrop" style="position: static; padding: 24px 0;">
                    <div class="c-dialog  c-dialog--sm" role="document" style="display: block; margin: 0 auto;">
                        <div class="c-dialog__head  o-tile  o-tile--xs">
                            <div class="o-tile__body">
                                <h4 class="c-dialog__title">Heading Four</h4>
                            </div>
                            <div class="o-tile__right">
                                <a href="#" class="c-dialog__close" aria-hidden="true" data-dismiss="modal">
                                    <span class="icon  icon--muted  icon--16  icon--close"></span>
                                </a>
                            </div>
                        </div>
                        <div class="c-dialog__body">
                            Woohoo, you're reading this text in a modal!
                        </div>
                        <div class="c-dialog__foot">
                            <div class="c-btn-inline  u-float-right">
                                <button type="button" class="c-btn  c-btn--sm  c-btn--secondary-outline" data-dismiss="modal">Close</button>
                                <button type="button" class="c-btn  c-btn--sm  c-btn--primary">Save changes</button>
                            </div>
                        </div>
                    </div>

                    <div class="c-dialog  u-hide" role="document" style="display: block; margin: 24px auto 0;">
                        <div class="c-dialog__head  o-tile  o-tile--xs">
                            <div class="o-tile__body">
                                <h2 class="c-dialog__title">Heading Two</h2>
                            </div>
                            <div class="o-tile__right">
                                <a href="#" class="c-dialog__close" aria-hidden="true" data-dismiss="modal"><span class="icon  icon--muted  icon--16  icon--close"></span></a>
                            </div>
                        </div>
                        <div class="c-dialog__body">
                            Woohoo, you're reading this text in a modal!
                        </div>
                        <div class="c-dialog__foot">
                            <div class="c-btn-inline  u-float-right">
                                <button type="button" class="c-btn  c-btn--secondary-outline" data-dismiss="modal">Close</button>
                                <button type="button" class="c-btn  c-btn--primary">Save changes</button>
                            </div>
                        </div>
                    </div>
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
                    <div class="o-tile__item  u-width-1/3  u-align-left">
                        <button type="button" class="c-btn  c-btn--primary" data-toggle="modal" data-target="#modal-sample-small" style="min-width: 160px;">
                            Open Small Modal
                        </button>
                    </div>
                    <div class="o-tile__item  u-width-1/3  u-align-center">
                        <button type="button" class="c-btn  c-btn--primary" data-toggle="modal" data-target="#modal-sample-normal" style="min-width: 160px;">
                            Open Medium Modal
                        </button>
                    </div>
                    <div class="o-tile__item  u-width-1/3  u-align-right">
                        <button type="button" class="c-btn  c-btn--primary" data-toggle="modal" data-target="#modal-sample-large" style="min-width: 160px;">
                            Open Large Modal
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <hr class="u-divider  u-margin-ends-lg">

        <div class="o-grid">
            <div class="o-grid__item  u-width-1/3">
                <h4 class="u-text-6  u-color-muted  u-margin-none">Drawer</h4>
            </div>
            <div class="o-grid__item  u-width-2/3">
                <div class="o-tile  u-align-center">
                    <div class="o-tile__left  u-width-1/3"></div>
                    <div class="o-tile__body  u-width-1/3">
                        <button type="button" class="c-btn  c-btn--primary" data-toggle="modal" data-target="#drawer-sample-top" style="min-width: 160px;">
                            Open Top Drawer
                        </button>
                    </div>
                    <div class="o-tile__right  u-width-1/3"></div>
                </div>

                <div class="o-tile  u-margin-ends-md">
                    <div class="o-tile__left  u-width-1/3  u-align-left">
                        <button type="button" class="c-btn  c-btn--primary" data-toggle="modal" data-target="#drawer-sample-left" style="min-width: 160px;">
                            Open Left Drawer
                        </button>
                    </div>
                    <div class="o-tile__body  u-width-1/3">

                    </div>
                    <div class="o-tile__right  u-width-1/3  u-align-right">
                        <button type="button" class="c-btn  c-btn--primary" data-toggle="modal" data-target="#drawer-sample-right" style="min-width: 160px;">
                            Open Right Drawer
                        </button>
                    </div>
                </div>

                <div class="o-tile  u-align-center">
                    <div class="o-tile__left  u-width-1/3"></div>
                    <div class="o-tile__body  u-width-1/3">
                        <button type="button" class="c-btn  c-btn--primary" data-toggle="modal" data-target="#drawer-sample-bottom" style="min-width: 160px;">
                            Open Bottom Drawer
                        </button>
                    </div>
                    <div class="o-tile__right  u-width-1/3"></div>
                </div>
            </div>
        </div>
    </section>
</section>

<!-- Modal -->
<div class="c-modal" id="modal-sample-normal" tabindex="-1" role="dialog">
    <div class="c-dialog" role="document">
        <div class="c-dialog__head  o-tile  o-tile--xs">
            <div class="o-tile__body">
                <h4 class="c-dialog__title">Heading Four</h4>
            </div>
            <div class="o-tile__right">
                <a href="#" class="c-dialog__close" aria-hidden="true" data-dismiss="modal"><span class="icon  icon--muted  icon--16  icon--close"></span></a>
            </div>
        </div>
        <div class="c-dialog__body">
            Woohoo, you're reading this text in a modal!
        </div>
        <div class="c-dialog__foot">
            <div class="c-btn-inline  u-float-right">
                <button type="button" class="c-btn  c-btn--secondary-outline" data-dismiss="modal">Close</button>
                <button type="button" class="c-btn  c-btn--primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="c-modal" id="modal-sample-small" tabindex="-1" role="dialog">
    <div class="c-dialog  c-dialog--sm" role="document">
        <div class="c-dialog__head  o-tile  o-tile--xs">
            <div class="o-tile__body">
                <h4 class="c-dialog__title">Heading Four</h4>
            </div>
            <div class="o-tile__right">
                <a href="#" class="c-dialog__close" aria-hidden="true" data-dismiss="modal"><span class="icon  icon--muted  icon--16  icon--close"></span></a>
            </div>
        </div>
        <div class="c-dialog__body">
            Woohoo, you're reading this text in a modal!
        </div>
        <div class="c-dialog__foot">
            <div class="c-btn-inline  u-float-right">
                <button type="button" class="c-btn  c-btn--secondary-outline" data-dismiss="modal">Close</button>
                <button type="button" class="c-btn  c-btn--primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="c-modal" id="modal-sample-large" tabindex="-1" role="dialog">
    <div class="c-dialog  c-dialog--lg" role="document">
        <div class="c-dialog__head  o-tile  o-tile--xs">
            <div class="o-tile__body">
                <h4 class="c-dialog__title">Heading Four</h4>
            </div>
            <div class="o-tile__right">
                <a href="#" class="c-dialog__close" aria-hidden="true" data-dismiss="modal"><span class="icon  icon--muted  icon--16  icon--close"></span></a>
            </div>
        </div>
        <div class="c-dialog__body">
            Woohoo, you're reading this text in a modal!
        </div>
        <div class="c-dialog__foot">
            <div class="c-btn-inline  u-float-right">
                <button type="button" class="c-btn  c-btn--secondary-outline" data-dismiss="modal">Close</button>
                <button type="button" class="c-btn  c-btn--primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<div class="c-drawer  c-drawer--left" id="drawer-sample-left" tabindex="-1" role="dialog">
    <div class="c-drawer__content  u-padding-xl">Left Drawer</div>
</div>

<div class="c-drawer  c-drawer--right" id="drawer-sample-right" tabindex="-1" role="dialog">
    <div class="c-drawer__content  u-padding-xl">Right Drawer</div>
</div>

<div class="c-drawer  c-drawer--top" id="drawer-sample-top" tabindex="-1" role="dialog">
    <div class="c-drawer__content  u-padding-xl">Top Drawer</div>
</div>

<div class="c-drawer  c-drawer--bottom" id="drawer-sample-bottom" tabindex="-1" role="dialog">
    <div class="c-drawer__content  u-padding-xl">Bottom Drawer</div>
</div>
