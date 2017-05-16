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


$app = new \Ara\App\App();
$app->request  = new \Anax\Request\Request();
$app->response = new \Anax\Response\Response();
$app->url      = new \Anax\Url\Url();
$app->router   = new \Anax\Route\RouterInjectable();
$app->view     = new \Anax\View\ViewContainer();
$app->session  = new \Ara\Session\Session();
$app->navbar = new \Ara\Navbar\Navbar();
$app->calendar = new \Ara\Calendar\Calendar();
$app->connect = new \Ara\Connect\Connect();
$app->admin = new \Ara\Connect\Admin();
$app->content = new \Ara\Connect\Content();
$app->page = new \Ara\Connect\Page();
$app->blog = new \Ara\Connect\Blog();
$app->block = new \Ara\Connect\Block();
$app->textfilter = new \Ara\Textfilter\Textfilter();
$app->webshop = new \Ara\Connect\Webshop();

$app->view->setApp($app);
$app->navbar->setApp($app);
$app->admin->setApp($app);
$app->content->setApp($app);
$app->page->setApp($app);
$app->blog->setApp($app);
$app->webshop->setApp($app);


$app->view->configure("view.php");
$app->navbar->configure("navbar.php");
// $app->db->setDefaultsFromConfiguration();
// $app->db->connect();



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
