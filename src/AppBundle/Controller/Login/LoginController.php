<?php


namespace AppBundle\Controller\Login;


use AppBundle\Form\loginForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends Controller
{

    /**
     * @Route("/login/loginPage", name="loginRoute")
     * @param Request $request
     * @return Response
     */
    public function loginAction(Request $request)
    {
        $form = $this->createForm(loginForm::class);

        return $this->render('login/login.html.twig',[
            'loginform' => $form->createView()
        ]);
    }

}