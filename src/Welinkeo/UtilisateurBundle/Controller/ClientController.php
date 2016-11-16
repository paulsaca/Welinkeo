<?php

namespace Welinkeo\UtilisateurBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Welinkeo\UtilisateurBundle\Entity\Adresse;

use Welinkeo\UtilisateurBundle\Form\Type\AdresseAddType;


class ClientController extends Controller {
		
	public function addAction(Request $request) 
	{
		$adresse = new Adresse();
		$repository = $this->getDoctrine ()->getRepository ('WelinkeoUtilisateurBundle:Adresse');
		// Création du formulaire service
	
		$form = $this->createForm ( AdresseAddType::class, $adresse, array ('action' => $this->generateUrl( 'Welinkeo_UtilisateurBundle_testAjout' )));
		$form->handleRequest ( $request );
		
		if ($form->isSubmitted () && $form->isValid ())
		{
			Return new Response("hello world");
		}
		else
		{
			return $this->render('WelinkeoUtilisateurBundle::test.html.twig', array('form' => $form->createView()));
		}
	}	
}

