<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'Dala00/Upload' => $baseDir . '/vendor/dala00/cakephp-simple-upload/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/',
        'Ratings' => $baseDir . '/vendor/dereuromark/cakephp-ratings/'
    ]
];