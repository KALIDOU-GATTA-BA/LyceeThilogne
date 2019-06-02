<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;
use App\Mailer\Mailer;

use Symfony\Component\HttpFoundation\Request;

class ContactController extends AbstractController
{
    private $mailer;

    public function __construct(Mailer $mailer){
        $this->mailer = $mailer;
    }
    /**
     * @Route("/contact", name="contactForm")
     */
    public function contact(Request $request)
    {
        $form = $this->createForm(ContactType::class)->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
                        $this->mailer->send();
        }
        return $this->render('contact/index.html.twig', [
                        'formContact' => $form->createView(),
                    ]);
    }
}
