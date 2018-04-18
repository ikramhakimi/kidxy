<div class="c-card  u-padding-ends-lg  u-padding-sides-xl">
    <h1 class="u-text-4  u-margin-bottom-lg">Billing Details</h1>

    <table>
        <thead>
            <tr>
                <td>Date</td>
                <td>Transaction ID</td>
                <td>Items</td>
                <td>Status</td>
                <td>Amount</td>
                <td>&nbsp;</td>
            </tr>
        </thead>

        <tbody>
            <?php for($count = 0; $count < 4; $count++) { ?>
            <tr>
                <td>28/04/2018</td>
                <td><?=rand(1000000000000,2000000000000)?></td>
                <td><strong>Farm In The City</strong></td>
                <td><span class="u-color-positive">Paid</span></td>
                <td class="is--tight">RM 30.90</td>
                <td class="is--tight"><a href="manage-billing-details-paid.php">View Bill</a></td>
            </tr>

            <tr>
                <td>20/04/2018</td>
                <td><?=rand(1000000000000,2000000000000)?></td>
                <td><strong>FAMILY Jkids Playground (Tropicanan City Mall)</strong></td>
                <td><span class="u-color-positive">Paid</span></td>
                <td class="is--tight">RM 189.20</td>
                <td class="is--tight"><a href="manage-billing-details-paid.php">View Bill</a></td>
            </tr>

            <tr>
                <td>17/04/2018</td>
                <td><?=rand(1000000000000,2000000000000)?></td>
                <td><strong>Elephant Pack - Play More Credit Purchase</strong></td>
                <td><span class="u-color-muted">Refunded</span></td>
                <td class="is--tight">RM 15.00</td>
                <td class="is--tight"><a href="manage-billing-details-refund.php">View Bill</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
