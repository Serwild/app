<?php
declare(strict_types=1);

namespace Application\Controller;

use Infrastructure\Symfony\Controller\SymfonyController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class DefaultController extends SymfonyController
{
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function index() : Response
    {
        return $this->render('base.html.twig');
    }
}
