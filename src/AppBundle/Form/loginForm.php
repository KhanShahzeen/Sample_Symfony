<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class loginForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('user', TextType::class,[
            'label_attr' => [
                'class' => 'cred'
            ]
        ])
                ->add('password', PasswordType::class,[
                    'label_attr' => [
                        'class' => 'cred'
                    ]
                ]);
    }

}
