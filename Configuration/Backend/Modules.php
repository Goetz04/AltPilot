<?php

declare(strict_types=1);

use Goetz\Altpilot\Controller\BackendController;

return [
    'altpilot' => [
        'parent' => 'content',
        'position' => ['after' => 'records'],
        'inheritNavigationComponentFromMainModule' => false,
        'access' => 'user',
        'workspaces' => 'live',
        'path' => '/module/web/altpilot',
        'iconIdentifier' => 'altpilot-logo',
        'labels' => 'LLL:EXT:altpilot/Resources/Private/Language/locallang_mod.xlf',
        'routes' => [
            '_default' => [
                'target' => BackendController::class . '::handleRequest',
            ],
        ],
    ],
];
