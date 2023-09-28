<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustumerController extends AbstractController
{
    #[Route('/custumer', name: 'app_custumer')]
    public function index(): Response
    {
        return $this->render('custumer/index.html.twig', [
            'controller_name' => 'CustumerController',
        ]);
    }
}
