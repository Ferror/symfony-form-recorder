<?php

declare(strict_types=1);

namespace Ferror\Controller;

use Ferror\FormRecorder\Exception\HoneyPotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class SubmitAction extends AbstractController
{
    /**
     * @throws HoneyPotFoundException
     */
    public function __invoke(Request $request): Response
    {
        try {
            if ($request->get('_gotcha')) {
                throw new HoneyPotFoundException();
            }

            return new Response('form submitted');
        } catch (HoneyPotFoundException $exception) {
            return new JsonResponse(['error' => ''], 400);
        }
    }
}
