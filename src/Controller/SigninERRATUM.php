<?php 
namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SigninERRATUM extends AbstractController
{

    #[Route('/signinerratum', methods: ['GET'])]
    public function login(): Response
    {
        $hour = date('H:i:s');
        return $this->render('signin.html.twig', [
        'hour' => $hour,
        ]);
    
    }

    #[Route('/signinerratum', methods: ['POST'])]
    public function loginPost(Request $request): Response 
    {
        $login = $request->request->get('login');
        $password = $request->request->get('password');
        return $this->render('succes.html.twig', [
            'login' => $login,            
        ]);
    }
}