<?php

namespace Welinkeo\UtilisateurBundle\Form\Type;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


use EDF\ipaasBundle\Entity\Adresse;
use EDF\ipaasBundle\Entity\Pays;




class AdresseAddType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
        ->add('adresse', TextareaType::class)
		->add('ville', TextType::class)
		->add('codepostal', TextType::class)
		->add('communecartier', TextType::class)
		->add('autre', TextareaType::class)
		->add('pays', EntityType::class, array('class' => 'WelinkeoUtilisateurBundle:Pays',	'choice_label' => 'nom'), array('choices'  => 'id'))	
		->add('save', SubmitType::class, array('label' => "Soumettre"));
    	
    }
    
     public function configureOptions(OptionsResolver $resolver)
    {
    	$resolver->setDefaults(array(
    			'data_class' => 'Welinkeo\UtilisateurBundle\Entity\Adresse', 
    			
    	));
    }
    
    public function getName()
    {
    	return 'EDF_UtilisateurBundle_adresse';
    }
    
}