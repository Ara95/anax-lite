<?php

$navbarTop = [

    "config" => [
        "navbar-class" => "navbar"
    ],

    "items" => [

        "Hem" => [
            "text"  => "Home",
            "link"   => "",
        ],

        "About" => [
             "text"  => "About",
              "link"   => "about",
          ],

        "Report" => [
               "text"  => "Report",
               "link"   => "report",
           ],
       ]
];


echo "<nav class='" . $navbarTop["config"]["navbar-class"] ."'>";
foreach ($navbarTop["items"] as $item) {
    $urls = $app->url->create($item["link"]);
    echo "<li><a href='$urls'>" . $item["text"] . "</a></li>";
}
echo "</nav>";
