<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FacturasController extends AbstractController
{
    /**
     * @Route("/facturas", name="app_facturas")
     */
    public function index(): Response
    {
        return $this->render('facturas/index.html.twig', [
            'controller_name' => 'FacturasController',
        ]);
    }
}
