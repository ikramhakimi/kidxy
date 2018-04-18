<div class="c-card  u-padding-ends-lg  u-padding-sides-xl">
    <h1 class="u-text-4  u-margin-bottom-lg">Kidxy Credits</h1>
    <div class="c-card  c-card--outline-grey  u-padding-md  u-width-1/2  u-width-1@mobile">
        <div class="o-tile  o-tile--middle">
            <div class="o-tile__body">
                Your available credits balance
                <br>
                Valid until 11/6/2019
            </div>
            <div class="o-tile__right">
                <strong class="u-text-2  u-color-primary">RM 124.00</strong>
            </div>
        </div>
    </div>
    <hr class="u-divider  u-margin-ends-lg">
    <h2 class="u-text-4  u-margin-bottom-lg">Transaction History</h2>

    <table>
        <thead>
            <tr>
                <td>Date</td>
                <td>Transaction ID</td>
                <td>Items</td>
                <td>Type</td>
                <td>Amount</td>
                <td>&nbsp;</td>
            </tr>
        </thead>

        <tbody>
            <?php for($count = 0; $count < 3; $count++) { ?>
            <tr>
                <td>28/04/2018</td>
                <td><?=rand(1000000000000,2000000000000)?></td>
                <td><strong>Farm In The City</strong></td>
                <td><span class="u-color-positive">Credit</span></td>
                <td class="is--tight">RM 30.90</td>
                <td class="is--tight"><a href="manage-billing-details.php">View Bill</a></td>
            </tr>

            <tr>
                <td>20/04/2018</td>
                <td><?=rand(1000000000000,2000000000000)?></td>
                <td><strong>FAMILY Jkids Playground (Tropicanan City Mall)</strong></td>
                <td><span class="u-color-positive">Credit</span></td>
                <td class="is--tight">RM 189.20</td>
                <td class="is--tight"><a href="manage-billing-details.php">View Bill</a></td>
            </tr>

            <tr>
                <td>17/04/2018</td>
                <td><?=rand(1000000000000,2000000000000)?></td>
                <td><strong>Elephant Pack - Play More Credit Purchase</strong></td>
                <td><span class="u-color-muted">Debit</span></td>
                <td class="is--tight">RM 15.00</td>
                <td class="is--tight"><a href="manage-billing-details-refund.php">View Bill</a></td>
            </tr>
            <?php } ?>
            <tr>
                <td>9/04/2018</td>
                <td><?=rand(1000000000000,2000000000000)?></td>
                <td><strong>Elephant Pack - Play More Credit Purchase</strong></td>
                <td><span class="u-color-muted">Debit</span></td>
                <td class="is--tight">RM 15.00</td>
                <td class="is--tight"><a href="manage-billing-details-refund.php">View Bill</a></td>
            </tr>
        </tbody>
    </table>
</div>
