<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/", name="welcome")
     */
    public function index()
    {
        return $this->render('welcome/index.html.twig');
    }

    /**
     * @Route("/hello-page", name="hello_page")
     */
    public function hello(string $name = 'admin')
    {
        return $this->render('hello_page.html.twig', [
            'person_name' => $name,
        ]);
    }
}