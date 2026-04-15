<?php
namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Signin extends AbstractController
{
    #[Route('/signin', methods: ['GET'])]
    public function showSignin(): Response
    {
        $hour = date('H:i:s');
        return $this->render('signin.html.twig', [
            'hour' => $hour,
            'errors' => [],
        ]);
    }

    #[Route('/signin', methods: ['POST'])]
    public function processSignin(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $hasher): Response 
    {
        $errors = [];
        $fields = ['name', 'first_name', 'login', 'email', 'telephone', 'password'];
        
        foreach ($fields as $field) {
            if (empty($request->request->get($field))) {
                $errors[] = $field;
            }
        }

        if (!empty($errors)) {
            return $this->render('signin.html.twig', [
                'errors' => $errors,
                'values' => $request->request->all(),
                'hour' => date('H:i:s'),
            ]);
        }

        $user = new User();
        $user->setLogin($request->request->get('login'));
        $plainPassword = $request->request->get('password');
        $hashedPassword = $hasher->hashPassword($user, $plainPassword);
        $user->setPassword($hashedPassword);
        $user->setName($request->request->get('name'));
        $user->setFirstName($request->request->get('first_name'));
        $user->setEmail($request->request->get('email'));
        $user->setTelephone($request->request->get('telephone'));

        $em->persist($user);
        $em->flush();

        return $this->render('succes.html.twig', [
            'login' => $user->getLogin(),            
        ]);
    }

}

