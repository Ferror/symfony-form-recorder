<?php

declare(strict_types=1);

namespace Ferror\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class HomeAction extends AbstractController
{
    public function __invoke(): Response
    {
        return new Response();
    }
}
