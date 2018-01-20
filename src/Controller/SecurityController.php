<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     * param Request $request
     * @param AuthenticationUtils $utils
     */
    public function login(Request $request, AuthenticationUtils $utils)
    {
        #Gets last login error if exists
        $error = $utils->getLastAuthenticationError();

        $userName = $utils->getLastUsername();

        return $this->render('security/login.html.twig', array(
            'last_username' => $userName,
            'error'         => $error,
        ));
    }
}
