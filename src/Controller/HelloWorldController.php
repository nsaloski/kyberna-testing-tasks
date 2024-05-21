<?php

namespace App\Controller;

use App\Services\MessageGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelloWorldController extends AbstractController
{
    #[Route('/hello/world', name: 'app_hello_world')]
    public function index(MessageGenerator $messageGenerator): Response
    {

        $message = $messageGenerator->getHelloMessage();
        return $this->render('hello_world/index.html.twig', [
            'controller_name' => 'HelloWorldController',
            'message' => $message,
        ]);
    }
}
