<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class OtpController extends AbstractController
{
    #[Route('/otp', name: 'app_otp')]
    public function index(): Response
    {
    $hour = date('H:i:s');
    return $this->render('otp/index.html.twig', [
            'controller_name' => 'OtpController',
            'hour' => $hour,
        ]);
    }
}