<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController{

    /**
     * @Route("/", name="hello")
     *
     * @return void
     */
    public function hello()
    {
        $text = "<h1>Hello World!</h1>";
        return new Response($text);
    }

    /**
    * @Route("/bye", name="bye")
    *
    * @return void
    */
    public function bye()
    {
        return $this->render("bye.html.twig");
    }
}