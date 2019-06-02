<?php

namespace App\Mailer;
use Twig\Environment;

class Mailer
{
    /**
     * @var \Swift_Mailer
     */
    private $swiftMailer;
    /**
     * @var Environment
     */
    private $twig;

    public function __construct(\Swift_Mailer $swiftMailer, Environment $twig)
    {
        $this->swiftMailer = $swiftMailer;
        $this->twig = $twig;
    }

    public function send()
    {


        $email = 'baniabina.ba@gmail.com';
        $message = (new \Swift_Message('Musée du Louvre'))
                ->setFrom('baniabina.ba@gmail.com')
                ->setTo($email)
                ->setBody(
                                        $this->twig->render(
                                            'emails/contact.html.twig',
                                            ['contact_name' => '$cm->sql()[2]',
                                            'contact_email' => '$cm->sql()[4]',
                                            'contact_phoneNumber' => '$cm->sql()[0]',
                                            'contact_message' => '$cm->sql()[1]',
                                            ]
                                        ),
                                        'text/html'
                    ); 

             $this->swiftMailer->send($message);
    }

    public function send2()
    {
    }
}
