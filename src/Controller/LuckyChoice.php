<?php
// src/Controller/LuckyChoice.php
namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyChoice
{
    #[Route('/lucky/choice')]
    public function choice(): Response
    {
        $fruits = ['banane', 'cerise', 'mangue', 'kiwi'];
        shuffle($fruits);
        
        return new Response(
        '<html><body>
        Résultat : '.$fruits[0].'
        </body></html>'

        );
    }
}