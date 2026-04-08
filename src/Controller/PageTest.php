<?php
// src/Controller/PageTest.php
namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class PageTest
{
    #[Route('/pagetest')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html>
                <body>
                PageTest Lucky number: '.$number.'
                </body>
            </html>'
        );
    }
}