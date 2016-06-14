<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('SiteBundle:Default:index.html.twig');
    }

    /**
     * @Route("/ensaios", name="ensaios")
     */
    public function ensaiosAction()
    {
        // replace this example code with whatever you need
        return $this->render('@Site/Default/ensaios.html.twig');
    }

    /**
     * @Route("/contato", name="contato")
     */
    public function contatoAction()
    {
        // replace this example code with whatever you need
        return $this->render('@Site/Default/contato.html.twig');
    }

    /**
     * @Route("/hinos", name="hinos")
     */
    public function hinosAction()
    {
        $repository = $this->getDoctrine()->getRepository('SiteBundle:Hino');

        return $this->render('@Site/Default/hinos.html.twig', array('hinos' => $repository->findAll()));
    }
}
