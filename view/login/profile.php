<?php
$db = $app->connect;
$session = $app->session;
$admin = $app->admin;
$user = $session->get("name");
$profileInfo = $db->getInfo($user);
?>


<h1 class="header">User profile.</h1>

<p>Welcome, <strong><?= $session->get('name') ?>!</strong></p>


    <label style="text-align:center;" for="info">User information</label>
    <div class="info"> <?= $profileInfo[0] ?> </div>

    <label style="text-align:center;" for="email">Email</label>
    <div class="info"> <?= $profileInfo[1] ?> </div>

    <label style="text-align:center;" for="Authority">Authority</label>
    <div class="info"> <?= $profileInfo[2] ?> </div>

<?php

setcookie("cookie1", "Last logged in " . date('Y/m/d'));

if (isset($_COOKIE['cookie1'])) {
        echo '<p>' . $_COOKIE["cookie1"] . "</p>";
}
echo "<p><a style='float:right;' href='$logoutLink'>Logout</a></p>";
if ($admin->adminControl($user)) {
    echo "<p><a style='float:left;' href='$adminLink'>admin panel</a></p>";
}
echo "<p><a style='float:right; margin-right:20px;' href='$changePasswordLink'>Change password</a></p>";
echo "<p><a style='float:left; margin-left:20px; ' href='$editLink'>Edit Profile</a></p>";
echo "</div>";
