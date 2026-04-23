<?php

declare(strict_types=1);

namespace GOETZ\Altpilot\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Backend\Attribute\AsController;
use TYPO3\CMS\Core\Http\JsonResponse;

#[AsController]
final readonly class AltTextController
{

    public function getImages(string $pageId) : array
    {
        // Placeholder implementation: In a real application, this would involve
        // querying the database or file system to retrieve images associated with the given page ID.
        return [
            'image1.jpg',
            'image2.jpg',
            'image3.jpg',
        ];
    }

    public function getAltText(ServerRequestInterface $request): ResponseInterface
    {
        // Placeholder implementation: In a real application, this would involve
        // analyzing the image and generating descriptive text.
        $result = [
            'image1' => 'A beautiful sunrise over the mountains.',
            'image2' => 'A group of people enjoying a picnic in the park.',
        ];

        return new JsonResponse(['result' => $result]);
    }
}
