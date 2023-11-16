<?php

// include all important files
include('../app/config/Init.php');

// set global page
global $page;

// set page
$page->setPage(basename(__FILE__, '.php'));

// include layout file
include('../views/layout.php');