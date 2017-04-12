
<?php

$app->session->start("");
if ($app->session->has("calendar")) {
    $show = $app->session->get("calendar");
} else {
    $app->session->set("calendar", $app->calendar);
    $show = $app->session->get("calendar");
}

if (isset($_GET['previous'])) {
    $show->previousMonth();
    header("Location:" . $redirect);
}

if (isset($_GET['next'])) {
    $show->nextMonth();
    header("Location:" . $redirect);
}

$show->Calendar();
?>

<form name='input' method='GET'>;
<input type='submit' class='prev' name='previous' value='< Previous'>;
<input type='submit' class='next' name='next' value='Next >'>;
</form>;
