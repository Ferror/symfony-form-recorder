<?php

declare(strict_types=1);

namespace Ferror\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class SubmitController extends AbstractController
{
    public function __invoke()
    {
        return new Response('form submitted');
    }
}
