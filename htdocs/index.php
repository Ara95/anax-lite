<?php
/**
 * Bootstrap the framework.
 */
// Where are all the files? Booth are needed by Anax.
define("ANAX_INSTALL_PATH", realpath(__DIR__ . "/.."));
define("ANAX_APP_PATH", ANAX_INSTALL_PATH);



// Include essentials
require ANAX_INSTALL_PATH . "/config/error_reporting.php";
// Get the autoloader by using composers version.
require ANAX_INSTALL_PATH . "/vendor/autoload.php";



// Add all resources to $app
$app = new \Ara\App\App();
$app->response = new \Anax\Response\Response();
$app->request = new \Anax\Request\Request();
$app->url     = new \Anax\Url\Url();
$app->router  = new \Anax\Route\RouterInjectable();
$app->view    = new \Anax\View\ViewContainer();
$app->session  = new \Ara\Session\Session();
$app->calendar = new \Ara\Calendar\Calendar();

$app->view->setApp($app);
$app->view->configure("view.php");


$app->navbar = new \Ara\Navbar\Navbar();
$app->navbar->configure("navbar.php");

$app->db = new \Anax\Database\DatabaseConfigure();
$app->db->configure("database.php");
$app->db->setDefaultsFromConfiguration();

$app->navbar->setApp($app);

// Init the object of the request class.
$app->request->init();


// Set default values from the request object.
$app->url->setSiteUrl($app->request->getSiteUrl());
$app->url->setBaseUrl($app->request->getBaseUrl());
$app->url->setStaticSiteUrl($app->request->getSiteUrl());
$app->url->setStaticBaseUrl($app->request->getBaseUrl());
$app->url->setScriptName($app->request->getScriptName());



// Update url configuration with values from config file.
$app->url->configure("url.php");
$app->url->setDefaultsFromConfiguration();

$app->style = $app->url->asset("css/style.css");

// Load the routes
require ANAX_INSTALL_PATH . "/config/route.php";

// Leave to router to match incoming request to routes
$app->router->handle($app->request->getRoute());
