<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Arbor service',
        'slogan' => 'boomchirurgie en tuinonderhoud',
        'site_url' => '',
        'pretty_uri' => true,
        'nav_menu' => [
            '' => 'Home',
            'bedrijven' => 'Bedrijven',
            'tuinwerken' => 'Tuinwerken',
        ],
        'tree_menu' => [
            'aanplanten-van-bomen-of-leibomen' => 'Aanplanten van bomen of leibomen',
            'advies' => 'Advies',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.2',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
