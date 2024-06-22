<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PreviewController extends AbstractController
{
    #[Route(['/', '/{text}'], name: 'app_index')]
    public function index(string $text = ""): Response
    {
        return $this->render('errors/401.html.twig');
    }
}
