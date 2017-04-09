
<?php

$app->session->start("");
if ($app->session->has("calendar")) {
    $show = $app->session->get("calendar");
} else {
    $app->session->set("calendar", $app->calendar);
    $show = $app->session->get("calendar");
}

if (isset($_POST['next'])) {
    $show->nextMonth();
    header("Location: $redirect");
    exit;
}

if (isset($_POST['previous'])) {
    $show->previousMonth();
    header("Location: $redirect");
    exit;
}

$show->calendar();
echo "<form name='input' method='post'>";
echo "<input type='submit' class='prev' name='previous' value='< Previous'>";
echo " ";
echo "<input type='submit' class='next' name='next' value='Next >'>";
echo "</form>";
