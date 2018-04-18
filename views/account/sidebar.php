<div class="c-manage__sidebar">
    <div class="o-tile  o-tile--middle">
        <div class="o-tile__left">
            <div class="c-avatar  c-avatar--48">
                <img src="images/avatars/avatar-1.png">
            </div>
        </div>
        <div class="o-tile__body">
            Hello,
            <br>
            <strong>Chloe Robertson</strong>
        </div>
    </div>

    <hr class="u-divider  u-divider--primary  u-margin-ends-lg">

    <ul class="c-manage__menu  o-list">
        <li class="o-list__item<?php if($page == "manage-account") { echo '  is--active'; }?>">
            <a href="manage-account.php" class="o-tile  o-tile--middle">
                <span class="o-tile__body">My Account</span>
                <span class="o-tile__right">
                    <span class="icon  icon--20  icon--chevron-right"></span>
                </span>
            </a>
        </li>

        <li class="o-list__item<?php if($page == "manage-booking") { echo '  is--active'; }?>">
            <a href="#" class="o-tile  o-tile--middle">
                <span class="o-tile__body">Booking History</span>
                <span class="o-tile__right">
                    <span class="icon  icon--20  icon--chevron-right"></span>
                </span>
            </a>
        </li>

        <li class="o-list__item<?php if($page == "manage-kidxy-credits") { echo '  is--active'; }?>">
            <a href="manage-kidxy-credits.php" class="o-tile  o-tile--middle">
                <span class="o-tile__body">Kidxy Credits</span>
                <span class="o-tile__right">
                    <span class="icon  icon--20  icon--chevron-right"></span>
                </span>
            </a>
        </li>

        <li class="o-list__item<?php if($page == "manage-billing") { echo '  is--active'; }?>">
            <a href="manage-billing.php" class="o-tile  o-tile--middle">
                <span class="o-tile__body">Billing Details</span>
                <span class="o-tile__right">
                    <span class="icon  icon--20  icon--chevron-right"></span>
                </span>
            </a>
        </li>
    </ul>
</div>
