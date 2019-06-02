<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contactForm")
     */
    public function contact(Request $request, ObjectManager $manager)
    {
        $form = $this->createForm(ContactType::class)->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $form=$form->getData();
            $manager->persist($form);
            $manager->flush();
        }
        return $this->render('contact/index.html.twig', [
                        'formContact' => $form->createView(),
                    ]);
    }
}
