<?php
include_once('../app/utils/functions.php');

require_once('../app/model/db.php');
require_once('../app/controller/CMSController.php');
require_once('../app/controller/SiteController.php');

$uri = isset($_GET['uri']) ? $_GET['uri'] : '/';

if (strstr($uri, 'admin')) 
    cms_start();
else 
    load_site_template();   


