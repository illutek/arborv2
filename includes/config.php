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
            'boombescherming-op-werven' => 'Boombescherming op werven',
            'boomveiligheids-inspecties' => 'Boomveiligheids- inspecties',
            'storm-interventies' => 'Interventies voor, tijdens en na storm',
            'inventarisatie-en-beheer-planning-van-boombestanden' => 'Inventarisatie en beheer planning van boombestanden',
            'kroon-en-kluitverankering' => 'Kroon- en kluitverankering',
            'snoeien-van-bomen' => 'Snoeien van bomen',
            'standplaats-verbetering' => 'Standplaats verbetering',
            'uitgraven-frezen-van-stronken' => 'Uitgraven of frezen van stronken',
            'vellen-van-gevaarlijke-bomen' => 'Vellen van gevaarlijke bomen',
            'verplanten-van-bomen' => '',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.2',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
