<?php

$blog = $app->blog;
echo '<div class="main">';

if (substr($app->request->getRoute(), 0, 5) === "blog/") {
    echo "<h1>Blogpost</h1>";
    echo "<section>";
    $slug = substr($app->request->getRoute(), 5);
    $resultset = $blog->getBlogPost($slug);
    if (!$resultset) {
         header("Location: {$app->url->create('notfound')}");
         break;
    }
    $blog->showPost($resultset);
    echo "</section>";
} else {
    echo "<h1>Blog</h1>";
    $resultset = $blog->getBlog();
    $blog->showBlog($resultset);
}
echo "</div>";
