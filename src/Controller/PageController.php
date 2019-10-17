<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

use App\Utils\ConvertisseurTexte;

class PageController extends AbstractController{

     /**
     * @Route("/", methods={"GET"})
     */
    public function getPageController(){
     return $this->render('page.html.twig');
    }

     /**
     * @Route("/", methods={"POST"})
     */
    public function convertion(){
        $nombre = $_POST["nombre"];
        $basedepart = $_POST["basedepart"];
        $basearriver = $_POST["basearriver"];

        $convertisseur = new ConvertisseurTexte();
        $result = $convertisseur->convertion($nombre, $basedepart, $basearriver);
        return $this->render('page.html.twig', ["result" => $result]);

       }
}
