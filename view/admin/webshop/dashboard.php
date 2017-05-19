<div class="main">
<section>

<h1>Admin Dashboard</h1>
<p>This is the page for admin webshop</p>
<?= $app->navbar->getHTML(3); ?>
</section>

<?php

if (hasKeyPost('create')) {
    // get all product info
    $params = getPost([
        "description",
        "img",
        "price",
        "catId"
    ]);
    if (valueController($params)) {
        echo "<p class='warning'>Fail! Please enter ALL fields.</p>";
    } else {

        $app->webshop->createProduct($params);
        echo "<p class='success'>You created a product!</p>";
    }
}
