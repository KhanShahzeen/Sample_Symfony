<?php


namespace AppBundle\Controller;


use AppBundle\Form\loginForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends Controller
{
    /**
     * @Route("/login",name="security_login")
     */
    public function loginAction(){

        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $form = $this->createForm(loginForm::class,[
            'user' => $lastUsername
        ]);

        return $this->render('login/login.html.twig', [
            'loginform' => $form->createView(),
            'error' => $error
        ]);
    }

    /**
     * @Route("/logout", name="security_logout")
     * @throws \Exception
     */

    public function logoutAction(){
        throw new \Exception('this shouldnt be reached');
    }

}