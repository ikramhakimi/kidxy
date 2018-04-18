<section class="c-card  u-margin-bottom-lg">
    <header class="u-padding-xl">
        <h3 class="u-text-4  u-text-bold">Collapse</h3>

        <div>
            <p>Collapse are used to toggle sections of content.</p>
            <div>Using Bootstrap <ins>collapse.js</ins></div>
        </div>
    </header>

    <section class="presentation__specimen">
        <section class="o-grid">
            <div class="o-grid__item  u-width-1/3">
                <h4 class="u-text-6  u-color-muted  u-margin-none">Basic</h4>
            </div>
            <div class="o-grid__item  u-width-2/3">
                <a data-toggle="collapse" href="#collapse--example-0-1">
                    Toggle One
                </a>

                <span class="u-muted  u-margin-sides-sm">•</span>

                <a data-toggle="collapse" href="#collapse--example-0-2">
                    Toggle Two
                </a>

                <div id="collapse--example-0-1" class="c-collapse  collapse">
                    <strong>Content 1</strong> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                </div>

                <div id="collapse--example-0-2" class="c-collapse  collapse">
                    <strong>Content 2</strong> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.
                </div>
            </div>
        </section>

        <hr class="u-divider  u-margin-ends-lg">

        <section class="o-grid">
            <div class="o-grid__item  u-width-1/3">
                <h4 class="u-text-6  u-color-muted  u-margin-none">Multiple Target</h4>
            </div>
            <div class="o-grid__item  u-width-2/3">
                <a data-toggle="collapse" href="#collapse--example-1-1">
                    Toggle One
                </a>

                <span class="u-muted  u-margin-sides-sm">•</span>

                <a data-toggle="collapse" href="#collapse--example-1-2">
                    Toggle Two
                </a>

                <span class="u-muted  u-margin-sides-sm">•</span>

                <a data-toggle="collapse" href=".collapse--multi">
                    Toggle Both
                </a>

                <div id="collapse--example-1-1" class="c-collapse  collapse  collapse--multi">
                    <strong>Content 1</strong> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                </div>

                <div id="collapse--example-1-2" class="c-collapse  collapse  collapse--multi">
                    <strong>Content 2</strong> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.
                </div>
            </div>
        </section>

        <hr class="u-divider  u-margin-ends-lg">

        <section class="o-grid">
            <div class="o-grid__item  u-width-1/3">
                <h4 class="u-text-6  u-color-muted  u-margin-none">Accordian</h4>
            </div>
            <div class="o-grid__item  u-width-2/3">
                <div class="js-accordion">
                    <div class="c-accordion">
                        <a href="#collapse--example-2-1" data-toggle="collapse" data-parent=".js-accordion">
                            Toggle One
                        </a>

                        <div id="collapse--example-2-1" class="c-collapse  collapse  in">
                            <strong>Content 1</strong> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                        </div>
                    </div>

                    <div class="c-accordion">
                        <a href="#collapse--example-2-2" data-toggle="collapse" data-parent=".js-accordion">
                            Toggle Two
                        </a>

                        <div id="collapse--example-2-2" class="c-collapse  collapse">
                            <strong>Content 2</strong> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="u-divider  u-margin-ends-lg">

        <section class="o-grid">
            <div class="o-grid__item  u-width-1/3">
                <h4 class="u-text-6  u-color-muted  u-margin-none">Accordian <span class="u-muted  u-text-light  u-margin-sides-xs">&times;</span> Card</h4>
            </div>
            <div class="o-grid__item  u-width-2/3">
                <div class="js-accordion-2">
                    <div class="c-accordion  c-card">
                        <a class="c-accordion__head  o-tile  o-tile--middle" href="#collapse--example-3-1" data-toggle="collapse" data-parent=".js-accordion-2">
                            <span class="o-tile__left">
                                <span class="icon  icon--chevron-right"></span>
                            </span>

                            <span class="c-accordion__title  o-tile__body">Toggle One</span>
                        </a>
                        <div id="collapse--example-3-1" class="c-collapse  collapse  in">
                            <div class="c-accordion__content">
                                <strong>Content 1</strong> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                            </div>
                        </div>
                    </div>

                    <div class="c-accordion  c-card">
                        <a class="c-accordion__head  o-tile  o-tile--middle  collapsed" href="#collapse--example-3-2" data-toggle="collapse" data-parent=".js-accordion-2">
                            <span class="o-tile__left">
                                <span class="icon  icon--20  icon--muted  icon--info"></span>
                            </span>

                            <span class="c-accordion__title  o-tile__body">Toggle Two</span>

                            <span class="o-tile__right">
                                <span class="icon  icon--chevron-right"></span>
                            </span>
                        </a>

                        <div id="collapse--example-3-2" class="c-collapse  collapse">
                            <div class="c-accordion__content">
                                <strong>Content 2</strong> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</section>
