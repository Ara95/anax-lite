<?php
$admin = $app->admin;
$session = $app->session;

$session->start("");
if (!$session->has("name")) {
    header("Location: $failLink");
}
$user = $session->get("name");
if (!$admin->adminControl($user)) {
    header("Location: $failLink");
}
echo "<div class='main'>";

echo "<div class='admin-container'>";
echo "<div class='admin-header'>";
echo "<h1>Admin Tools</h1>";
echo "</div>";

echo "<div class='admin-sidebar'>";
echo $app->navbar->getHTML(2);
echo "</div>";
