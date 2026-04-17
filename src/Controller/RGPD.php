<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RGPD extends AbstractController
{
    #[Route('/rgpd', methods: ['GET'])]
    public function showRgpd(): Response
    {
        return $this->render('rgpd.html.twig');
    }
}