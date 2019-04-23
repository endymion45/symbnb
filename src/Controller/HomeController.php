<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {

    /**
     * @Route("/", name="homepage")
     */
    public function home(){

        $prenoms = ["alexis" =>33,"alexandre" =>12,"anne" =>40];

        return $this->render('home.html.twig',[
            'title' => 'Bonjour les amis',
            'age' => 31,
            'prenoms'=>$prenoms
        ]);
    }

    /**
     * @Route("/hello/{prenom}", name="hello")
     * @return Response
     */
    public function hello($prenom="anonyme"){
        return new Response('Bonjour '.$prenom);
    }
}
?>