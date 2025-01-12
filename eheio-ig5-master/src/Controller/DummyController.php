<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DummyController extends AbstractController
{
    #[Route('/dummy', name: 'app_dummy')]
    public function index(): Response
    {
        return $this->render('dummy/index.html.twig', [
            'controller_name' => 'FARAH',
        ]);
    }
    #[Route(path:'/home', name: 'app_home')]
    public function home(): Response
    {
        $text = "Hello this is home !";
        $tabYear = [2020,2021,2022,2023];
        return $this->render('dummy/home.html.twig',  [
            "text" => $text,
            "years"=>$tabYear
        ]);
    }
}
