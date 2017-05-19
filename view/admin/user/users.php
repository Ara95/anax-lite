<?php
$admin = $app->admin;
echo "<div class='general-container'>";
?>
<h3 style="color: whitesmoke;"> Users </h3>
<p style="color: whitesmoke;">Items per page:
    <a href="<?= mergeQueryString(["hits" => 2]) ?>">2</a> |
    <a href="<?= mergeQueryString(["hits" => 4]) ?>">4</a> |
    <a href="<?= mergeQueryString(["hits" => 8]) ?>">8</a>
</p>
<?php
$hits;
$page;
$max;

$hits = getGet("hits", 4);
if (!(is_numeric($hits) && $hits > 0 && $hits <= 8)) {
    die("Not valid for hits.");
}
$max = $admin->getMax($hits);

$page = getGet("page", 1);
if (!(is_numeric($hits) && $page > 0 && $page <= $max)) {
    die("Not valid for page.");
}
$offset = $hits * ($page - 1);

$columns = ["id", "name", "user", "email", "info", "authority"];
$orders = ["asc", "desc"];

$orderBy = getGet("orderby") ?: "id";
$order = getGet("order") ?: "asc";

if (!(in_array($orderBy, $columns) && in_array($order, $orders))) {
    die("Not valid input for sorting.");
}
$admin->setAllTables($hits, $offset, $orderBy, $order);
$link1 = mergeQueryString(["hits" => 2]);
?>

<?php for ($i = 1; $i <= $max; $i++) : ?>
    <a href="<?= mergeQueryString(["page" => $i]) ?>"><?= $i ?></a>
<?php endfor; ?>

</div></div></div>
