<?php
$db = $app->connect;
$session = $app->session;
$session->start("");

if (!$session->has("name")) {
    header("Location: $loginLink");
}
$user = $session->get("name");

if (isset($_POST['save'])) {
    $info = htmlentities($_POST['info']);
    $email = htmlentities($_POST['email']);
    $params = [$info, $email];
    $db->edit($params, $user);
}
