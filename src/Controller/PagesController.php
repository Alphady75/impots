<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{

    #[Route('/apropos', name: 'pages_apropos')]
    public function apropos(): Response
    {
        return $this->render('pages/apropos.html.twig', [
            
        ]);
    }

    #[Route('/contact', name: 'pages_contact')]
    public function contact(): Response
    {
        return $this->render('pages/contact.html.twig', [
            
        ]);
    }
}
