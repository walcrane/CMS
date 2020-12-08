<?php

function dump($a)
{
    echo '<pre>';
    print_r($a);
    echo '</pre>';
}

function load_site_template()
{
    require_once('app/view/site/page.php');
}

function load_cms_template($page)
{
    require_once('app/view/cms/' . $page);
}