<?php
namespace App\Controller;

use App\Form\AdmissionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Repository\AdmissionRepository;
use App\Handlers\Form\AdmissionFormHandler;

class AdmissionController extends AbstractController
{
    private $formHandler;
    /**
     * @var ContactFormHandler
     */
    public function __construct(AdmissionFormHandler $formHandler)
    {
        $this->formHandler = $formHandler;
    }

    /**
     * @Route("/admission", name="admission")
     */
    public function admission(Request $request)
    {
        $form = $this->createForm(AdmissionType::class)->handleRequest($request);
        if ($this->formHandler->handle($form)) {
            return $this->redirectToRoute('admission_form');
        }

        return $this->render('admission/index.html.twig', [
                           'AdmissionFContact' => $form->createView(),
                      ]);
    }
}
