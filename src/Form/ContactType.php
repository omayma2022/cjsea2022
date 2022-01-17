<?php

namespace App\Form;

use App\Entity\Contact;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    private function getConfiguration($label, $placeholder){
        return ['label' => $label,
        'attr' => [
            'placeholder'=> $placeholder
        ]
     ];
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
    
        $builder
            ->add('Nom_contact', TextType::class, $this->getConfiguration("Nom", "Tapez votre nom..."))
            ->add('Tel_contact', TextType::class, $this->getConfiguration("Tel", "Tapez votre numéro de téléphone...") )
            ->add('sujet_contact', TextType::class,$this->getConfiguration("Sujet", "Donnez votre sujet...") )
            ->add('message', TextType::class,$this->getConfiguration("Message", "Tapez votre message..."))
            ->add('email', EmailType::class, $this->getConfiguration("Email", "Tapez votre email..."))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}


// ->add('slug',
//                 TextType::class,
//                 $this->getConfiguration("Adresse web","Tapez l'adresse web (automatique)", [
//                     'required'=> false
//                  ])
//                 )