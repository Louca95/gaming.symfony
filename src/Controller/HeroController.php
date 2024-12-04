<?php

namespace App\Controller;

use App\Repository\HeroRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HeroController extends AbstractController
{
    #[Route('/heroes', name: 'hero_list')]
    public function index(HeroRepository $repository): Response
    {
        //récupérer tout les heros depuis la base de données
        $heroes =$repository->findAll();
        return $this->render('hero/index.html.twig', [
            'heroes' => $heroes,
        ]);
    }
    #[Route('/heroes/{alias}', name: 'hero_show')]
    public function show(HeroRepository $repository): Response
    {
        //récupérer tout les heros depuis la base de données
        $heroes =$repository->findAll();
        return $this->render('hero/index.html.twig', [
            'heroes' => $heroes,
        ]);
    }
}

