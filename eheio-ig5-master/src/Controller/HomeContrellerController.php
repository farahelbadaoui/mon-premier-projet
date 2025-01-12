<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeContrellerController extends AbstractController
{
    #[Route('/home/controller', name: 'app_home_contreller')]
    public function index(): Response
    {
       return new Response(content:"Hello World !");
    }
    #[Route(path:"/home/about", name:"app_about")]
    public function about():Response
    {
        return new Response( content:"hello World 2!");
    }
    #[Route("/home/contact",name:"app_home_contact")]
    public function contact():Response
    {
        return new Response(content:"WeLcome to contact");
    }
}
