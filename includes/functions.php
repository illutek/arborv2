<?php

/**
 * Displays site name.
 */
function site_name()
{
    echo config('name');
}

/**
 * Display site slogan
 */

function site_slogan()
{
    echo config('slogan');
}

/**
 * Displays site url provided in config.
 */
function site_url()
{
    echo config('site_url');
}

/**
 * Displays site version.
 */
function site_version()
{
    echo config('version');
}

/**
 * Website navigation.
 */
function nav_menu($sep = ' | ')
{
    $nav_menu = '';
    $nav_items = config('nav_menu');
    
    foreach ($nav_items as $uri => $name) {
        $query_string = str_replace('page=', '', $_SERVER['QUERY_STRING'] ?? '');
        $class = $query_string == $uri ? ' r-menu-overlay__active' : '';
        $url = config('site_url') . '/' . (config('pretty_uri') || $uri == '' ? '' : '?page=') . $uri;
        
        // Add nav item to list. See the dot in front of equal sign (.=)
        $nav_menu .= "<li class='r-menu-overlay__item'>" . '<a href="' . $url . '" title="' . $name . '" class="r-menu-overlay__link ' . $class . '">' . $name . '</a>' . "<li></li>";
    }

    echo trim($nav_menu, $sep);
}

function tree_menu($sep = ' | ')
{
    $tree_menu = '';
    $tree_items = config('tree_menu');
    
    foreach ($tree_items as $uri => $name) {
        $query_string = str_replace('page=', '', $_SERVER['QUERY_STRING'] ?? '');
        $class = $query_string == $uri ? ' r-menu-overlay__active' : '';
        $url = config('site_url') . '/' . (config('pretty_uri') || $uri == '' ? '' : '?page=') . $uri;
        
        // Add nav item to list. See the dot in front of equal sign (.=)
        $tree_menu .= "<li class='r-menu-overlay__item r-menu-overlay__item--indent'>" . '<a href="' . $url . '" title="' . $name . '" class="r-menu-overlay__link ' . $class . '">' . $name . '</a>' . "<li></li>";
    }

    echo trim($tree_menu, $sep);
}

/**
 * Displays page title. It takes the data from
 * URL, it replaces the hyphens with spaces and
 * it capitalizes the words.
 */
function page_title()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';

    echo ucwords(str_replace('-', ' ', $page));
}

/**
 * Displays page content. It takes the data from
 * the static pages inside the pages/ directory.
 * When not found, display the 404 error page.
 */
function page_content()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $path = getcwd() . '/' . config('content_path') . '/' . $page . '.phtml';

    if (! file_exists($path)) {
        $path = getcwd() . '/' . config('content_path') . '/404.phtml';
    }

    echo file_get_contents($path);
}

/**
 * Starts everything and displays the template.
 */
function init()
{
    require config('template_path') . '/template.php';
}
