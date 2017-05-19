
<?php

$db = $app->connect;
$session = $app->session;
$session->start("");

if ($session->has("name")) {
    $session->destroy();
} else {
    echo "<p>No active user.</p>";
    echo "<p><a href='$loginLink'>Login again.</a></p></div>";
    die();
}
// Check if session is active
$has_session = session_status() == PHP_SESSION_ACTIVE;
if (!$has_session) {
    echo "<p>Session does not longer exist. You have been logged logged out!</p>";
}
echo "<a href='$loginLink'>Login again.</a></div>";
