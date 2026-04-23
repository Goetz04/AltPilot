<?php
return [
    'alt-tags' => [
        'path' => '/api/alt-tags',
        'target' => \Goetz\Altpilot\Controller\AltTextController::class . '::getAltText',
        'methods' => ['POST'],
        'inheritAccessFromModule' => 'altpilot'
    ],
];
