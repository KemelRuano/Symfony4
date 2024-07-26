<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StandardController extends AbstractController
{
    #[Route('/standard', name: 'app_standard')]
    public function index(): Response
    {
        $num = 10;
        $num2 = 10;
        return $this->render('standard/index.html.twig', [
            'controller_name' => 'Kemel Ruano prueba',
            'num' => $num,
            "num2" => $num2,
        ]);
    }
    
    #[Route('/prueba2/{nombre}/', name: 'app_prueba2')]
    public function prueba2($nombre){
        return $this->render('standard/prueba2.html.twig', [
            'nombre' => $nombre,
        ]);
    }
}
