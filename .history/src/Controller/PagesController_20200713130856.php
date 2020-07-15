<?php

namespace App\Controller;

// use Twig\Environment;
// use Twig\Extra\Intl\IntlExtension;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PagesController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function home():Response
    {
        // $twig = new \Twig\Environment(date('Europe/Paris', 'l d M Y', 'H:m'));
        // $twig->addExtension(new IntlExtension());
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
