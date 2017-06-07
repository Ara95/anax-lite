<?php
$resLow = $app->connect->getAllRes("SELECT * FROM LowStock");
?>

<section>
    <h3>Low stock</h3>
    <table>
        <tr class="first">
            <th> Product ID </th>
            <th> Amount </th>
            <th> Occured </th>

        </tr>
    <?php foreach ($resLow as $row) :?>
            <tr>
            <td> <?= $row["prod_id"] ?> </td>
            <td> <?= $row["amount"] ?> </td>
            <td style="background:red;"> <?= $row["occured"] ?> </td>
            </tr>

    <?php endforeach; ?>
    </table>
</section>

</div>
