
<h1>Session</h1>

<?php


$app->session->start();


?>

<h2 class="metext"><?= $app->session->get('number') ?></h2>

<a class="button" href="<?= $app->url->create('session/increment') ?>">Öka värdet</a>
<a class="button" href="<?= $app->url->create('session/decrement') ?>">Minska värdet</a>
<a class="button" href="<?= $app->url->create('session/status') ?>">Visa status</a>
<a class="button" href="<?= $app->url->create('session/dump') ?>">Visa sessionsinnehåll</a>
<a class="button" href="<?= $app->url->create('session/destroy') ?>">Rensa sessionen</a>
