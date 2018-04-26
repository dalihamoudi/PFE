<?php

namespace Admin\TestBundle\Controller;

use Admin\TestBundle\AdminTestBundle;
use Admin\TestBundle\Entity\Client;
use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {

    }
    /**
     * @Route("/kiki")
     * @Template()
     */
    public function kikiAction()
    {

    }
    /**
     * @Route("/ajout")
     * @Template()
     */
    public function ajoutAction()
    {

    }

    /**
     * @Route("/show")
     * @Template()
     */
    public function ShowAction()
    {
    $client = $this->getDoctrine()
        ->getRepository('AdminTestBundle:Client')
        ->findAll();

    if (!$client){
        throw $this->createNotFoundException('Aucun Client Dans La Base De Donnée !');
    }
    return new Response($client);

    }

    /**
     * @Route("/affiche", name="afficher")
     */

    public function afficheAction(){

        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminTestBundle:Diplome')->findAll();


        return $this->render('AdminTestBundle:Default:affiche.html.twig');

    }
}
