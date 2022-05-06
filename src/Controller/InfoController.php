<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

Class InfoController
{

    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('title: "Infonews"');
    }

    #[Route('/user/{slug}')]
    public function userpage(string $slug = null): Response
    {   
        if($slug)
        {
            $title = u(str_replace('-', ' ', $slug))->title(true);
        }
        else
        {
            $title = "nie znaleziono tytułu";
        }
       
        return new Response($title);
    }
}