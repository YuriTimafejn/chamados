<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/', name: 'login')]
    public function index(): Response
    {
        return $this->render('login/login.html.twig');
    }

    #[Route('/cadastro', name: 'register')]
    public function register(): Response
    {
        return $this->render('login/register.html.twig');
    }
}
