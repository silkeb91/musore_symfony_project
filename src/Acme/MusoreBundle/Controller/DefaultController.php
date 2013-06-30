<?php

namespace Acme\MusoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeMusoreBundle:Default:overview_home.html.twig');
    }
}
