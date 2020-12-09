<?php

global $page;

function cms_start()
{
    global $page;

    $routes = [
        'admin' => 'dashboard.php',
        'admin/page' => 'page.php',
        'admin/page/new' => 'page_new.php',
        'admin/page/delete' => 'delete_page.php',
        'admin/page/edit' => 'edit_page.php',
        'admin/seo' => 'seo.php',
        'admin/settings' => 'settings.php',
        'admin/zaloguj' => 'login.php',
        'admin/wyloguj' => 'logout.php',
        'admin/delete' => 'delete.php',
    ];
    
    $uri = $_GET['uri'];

    foreach ($routes as $key => $value)
    {
        if ($uri == $key)
        {
            $page = $value;   
            break;
        }
    }

    if (isset($page))
        load_cms_template($page);
    else 
        echo '404 page';
}

//contorler jest to plik lub klasa, która odpowiada za przechwycenie adresu url i wyrenderowanie odpowiedniej templatki