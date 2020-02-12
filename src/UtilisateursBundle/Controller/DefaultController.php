<?php

namespace UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Utilisateurs/Default/index.html.twig');
    }


    public function niveauAction()
    {


        $niveaux = $this->getDoctrine()->getRepository('UtilisateursBundle/niveau')->findAll();
        return $this->render('@Utilisateurs/niveau.html.twig', ['niveaux'=>$niveaux ]);


    }
}
