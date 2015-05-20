<?php

namespace Cambi\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CambiGestionBundle:Default:index.html.twig', array('name' => $name));
    }

    public function listAction()
    {
        return $this->render('CambiGestionBundle:Colecciones:colecciones.html.twig', array());
    }
}
