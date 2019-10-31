<?php

namespace AppBundle\Controller\Hr;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HrController extends Controller
{
    /**
     * @Security("is_granted('ROLE_ADMIN')")
     * @Route("/hr")
     * @return Response
     */
    public function indexAction()
    {
//        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        return $this->render('hr/hrPanel.html.twig');
    }
}
