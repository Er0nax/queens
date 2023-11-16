<?php
/**
 * All variables here are accessable globally
 */

// include config files
include('../app/config/App.php');
include('../app/config/Settings.php');

// include controllers
include('../app/controllers/Controller.php');
include('../app/controllers/PageController.php');

// include helpers
include('../app/helpers/SiteHelper.php');

// include modules
include('../app/modules/Main.php');

// start classes
$app = new \config\App();
$settings = new \config\Settings();
$page = new \controllers\Page();
$helper = new \helpers\SiteHelper();

// run the application
$app->run();

