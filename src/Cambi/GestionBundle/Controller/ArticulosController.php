<?php

namespace Cambi\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticulosController extends Controller
{
    public function articuloAction($idarticulo)
    {
        return $this->render('CambiGestionBundle:Colecciones:lista_articulos.html.twig', array('idarticulo'=>$idarticulo));
    }
}
