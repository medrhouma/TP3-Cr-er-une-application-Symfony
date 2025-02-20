<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthController extends AbstractController
{
    #[Route('/connexion', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('pages/connexion.html.twig');
    }

    #[Route('/inscription', name: 'app_register')]
    public function register(): Response
    {
        return $this->render('pages/inscription.html.twig');
    }
}
