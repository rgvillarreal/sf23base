<?php

namespace RGV\SiteBundle\Controller;

use RGV\SiteBundle\Form\ContactoType;
use RGV\SiteBundle\Util\Util;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SiteController extends Controller
{   
    public function staticAction($page)
    {
        return $this->render('RGVSiteBundle:Static:'.$page.'.html.twig');
    }

    public function contactoAction(Request $request)
    {
        $form = $this->createForm(new ContactoType());

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {

                $subject = 'Contacto desde la web - '.$form->get('nombre')->getData();
                $from = $form->get('email')->getData();
                $template = ':Emails:contacto.html.twig';
                $options = array(
                    'ip' => $request->getClientIp(),
                    'nombre' => $form->get('nombre')->getData(),
                    'email' => $form->get('email')->getData(),
                    'mensaje' => $form->get('mensaje')->getData()
                );

                $util = new Util();
                $util->sendEmail($this, $subject, $from, $template, $options);

                $request->getSession()->getFlashBag()->add('success', 'Tu mensaje ha sido enviado! Gracias!');

                return $this->redirect($this->generateUrl('rgv_contacto_page'));
            }
        }

        return $this->render('RGVSiteBundle:Static:contacto.html.twig', array(
            'form' => $form->createView(),
        ));

    }
}