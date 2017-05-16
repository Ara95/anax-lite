<?php



$app->router->add("admin", function () use ($app) {
    $app->view->add("take1/header", ["title" => "Login"]);
    $app->view->add("navbar1/navbar");
    $app->view->add("admin", [
     "failLink" => $app->url->create("admin/fail")
    ]);
    $app->response->setBody([$app->view, "render"])
        ->send();
});


$app->router->add("admin/fail", function () use ($app) {
    $app->view->add("take1/header", ["title" => "Login"]);
    $app->view->add("navbar1/navbar");
    $app->view->add("admin/user/fail");
    $app->view->add("take1/footer");
    $app->response->setBody([$app->view, "render"])
        ->send();
});



$app->router->add("edituser", function () use ($app) {
    $app->view->add("take1/header", ["title" => "Login"]);
    $app->view->add("admin", [
     "failLink" => $app->url->create("admin/fail")
    ]);
    $app->view->add("edituser", [
     "usersLink" => $app->url->create("admin/users")
    ]);
    $app->view->add("take1/footer");
    $app->response->setBody([$app->view, "render"])
        ->send();
});



$app->router->add("admin/users", function () use ($app) {
    $app->view->add("take1/header", ["title" => "Login"]);
    $app->view->add("navbar1/navbar");
    $app->view->add("admin", [
     "failLink" => $app->url->create("admin/fail")
    ]);
    $app->view->add("admin/user/users");
    $app->view->add("take1/footer");
    $app->response->setBody([$app->view, "render"])
        ->send();
});



$app->router->add("admin/search", function () use ($app) {
    $app->view->add("take1/header", ["title" => "Login"]);
    $app->view->add("navbar1/navbar");
    $app->view->add("admin", [
     "failLink" => $app->url->create("admin/fail")
    ]);
    $app->view->add("admin/user/search", [
     "searchLink" => $app->url->create("admin/search")
    ]);
    $app->view->add("take1/footer");
    $app->response->setBody([$app->view, "render"])
        ->send();
});



$app->router->add("admin/add", function () use ($app) {
    $app->view->add("take1/header", ["title" => "Login"]);
    $app->view->add("navbar1/navbar");
    $app->view->add("admin", [
     "failLink" => $app->url->create("admin/fail")
    ]);
    $app->view->add("admin/user/add");
    $app->view->add("take1/footer");
    $app->response->setBody([$app->view, "render"])
        ->send();
});



$app->router->add("textfilter", function () use ($app) {
    $app->renderPage("textfilter", "createcontent");
});


$app->router->add("pages", function () use ($app) {
    $app->view->add("take1/header", ["title" => "pages"]);
    $app->view->add("navbar1/navbar");
    $app->view->add("admin/content/pages", [
     "pageLink" => $app->url->create("page")
    ]);
    $app->view->add("take1/footer");
    $app->response->setBody([$app->view, "render"])
        ->send();
});


$app->router->add("page", function () use ($app) {
    $app->renderPage("admin/content/page", "page");
});


$app->router->add("blog/**", function () use ($app) {
    $app->renderPage("admin/content/blog", "Blog");
});


$app->router->add("admin/create", function () use ($app) {
    $app->view->add("take1/header", ["title" => "createcontent"]);
    $app->view->add("navbar1/navbar");
    $app->view->add("admin", [
     "failLink" => $app->url->create("admin/fail")
    ]);
    $app->view->add("admin/content/create");
    $app->view->add("take1/footer");
    $app->response->setBody([$app->view, "render"])
        ->send();
});


$app->router->add("admin/overview", function () use ($app) {
    $app->view->add("take1/header", ["title" => "overviewcontent"]);
    $app->view->add("navbar1/navbar");
    $app->view->add("admin", [
     "failLink" => $app->url->create("admin/fail")
    ]);
    $app->view->add("admin/content/overview");
    $app->view->add("take1/footer");
    $app->response->setBody([$app->view, "render"])
        ->send();
});


$app->router->add("admin/edit", function () use ($app) {
    $app->view->add("take1/header", ["title" => "editcontent"]);
    $app->view->add("navbar1/navbar");
    $app->view->add("admin", [
     "failLink" => $app->url->create("admin/fail")
    ]);
    $app->view->add("admin/content/edit");
    $app->view->add("take1/footer");
    $app->response->setBody([$app->view, "render"])
        ->send();
});
