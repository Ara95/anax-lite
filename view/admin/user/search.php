<div class='general-container'>
<h3 style="color: whitesmoke;">Search</h3>

<form action="<?= $searchLink ?>" method="POST">
<input name="search" value="" placeholder="Search User">
<input type="submit" value="Search">
</form>

<?php
$admin = $app->admin;
if (isset($_POST['search'])) {
    $search = htmlentities($_POST['search']);
    $admin->searchUser($search);
}
echo "</div></div></div>";
