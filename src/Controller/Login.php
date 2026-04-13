<?php
namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\UserRepository;

class Login extends AbstractController
{
    #[Route('/login', methods: ['GET'])]
    public function showLogin(): Response
    {
        $hour = date('H:i:s');
        return $this->render('login.html.twig', [
            'hour' => $hour,
        ]);
    }

    #[Route('/login', methods: ['POST'])]
    public function processLogin(Request $request, UserRepository $userRepository): Response 
    {
        $login = $request->request->get('login');
        $password = $request->request->get('password');

        $userLogin = $userRepository->findOneBy(['login' => $login]);

        if ($userLogin == null) {
            return $this->render('defaite.html.twig');
        } elseif ($userLogin->getPassword() === $password) {
            return $this->render('succes.html.twig', [
                'login' => $login,
            ]);
        } else {
            return $this->render('defaite.html.twig');
        }
    }
}