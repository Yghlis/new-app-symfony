<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CustumerController extends AbstractController
{
    /**
     * @Route("/", name="customer", methods={"GET"})
     */
    public function index()
    {
        $customerName  = "John Doe";
        return $this->render('customer/index.html.twig', [
            'name' => $customerName,
        ]);
    }
}
