<?php

/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 25/03/16
 * Time: 22:49
 */

Namespace RGV\SiteBundle\Util;

class Util
{
    static public function getSlug($cadena, $separador = '-')
    {
        // Código copiado de http://cubiq.org/the-perfect-php-clean-url-generator
        $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $cadena);
        $slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $slug);
        $slug = strtolower(trim($slug, $separador));
        $slug = preg_replace("/[\/_|+ -]+/", $separador, $slug);

        return $slug;
    }

    static public function sendEmail($controller, $subject, $from, $template, $options)
    {
        $to = 'rodrigogvillarreal@gmail.com';

        $message = \Swift_Message::newInstance()
            ->setSubject($subject)
            ->setFrom($from)
            ->setTo($to)
            ->setReplyTo($from)
            ->setBody(
                $controller->renderView(
                    $template,
                    $options
                ),
                'text/html'
            );

        return $controller->get('mailer')->send($message);
    }
}
