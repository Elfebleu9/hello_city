<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Controller\Twig_Extensions_Extension_Intl;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function home():Response
    {
        // dd(date_default_timezone_get());
        return $this->render('pages/home.html.twig');
    }

     /**
     * @Route("/about-us", name="app_about")
     */
    public function about():Response
    {
        // dd(date_default_timezone_get());
        return $this->render('pages/about.html.twig');
    }
}
