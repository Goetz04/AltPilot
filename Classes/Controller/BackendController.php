<?php

declare(strict_types=1);

namespace Goetz\Altpilot\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Backend\Attribute\AsController;
use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Core\Page\PageRenderer;

#[AsController]
final readonly class BackendController
{
    public function __construct(
        private ModuleTemplateFactory $moduleTemplateFactory,
        private PageRenderer $pageRenderer,
    ) {}

    public function handleRequest(ServerRequestInterface $request): ResponseInterface
    {
        $view = $this->moduleTemplateFactory->create($request);
        $view->makeDocHeaderModuleMenu();
        $this->pageRenderer->loadJavaScriptModule('@goetz/altpilot/app.js');
        $this->pageRenderer->addCssFile('EXT:altpilot/Resources/Public/Css/altpilot.css');

        return $view->renderResponse('Backend/Index');
    }
}
