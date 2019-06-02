<?php

namespace App\Controller;

use App\Form\AdmissionFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Handlers\Form\AdmissionFormHandler2;

class AdmissionFormController extends AbstractController
{
    private $formHandler;
    /**
     * @var ContactFormHandler
     */
    public function __construct(AdmissionFormHandler2 $formHandler)
    {
        $this->formHandler = $formHandler;
    }

    /**
     * @Route("/admission/form", name="admission_form")
     */
    public function admission(Request $request)
    {
        $form = $this->createForm(AdmissionFormType::class)->handleRequest($request);
        if ($this->formHandler->handle($form)) {
            return $this->redirectToRoute('home');
        }

        return $this->render('admission_form/index.html.twig', [
                           'AdmissionFormContact' => $form->createView(),
                      ]);
    }
}
