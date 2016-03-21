<?php

namespace RGV\CorporateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CorporateBundle:Default:index.html.twig', array('name' => $name));
    }
}
