<?php

namespace App\Controller;

use App\Form\ContactType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    /**
     * @Route("/contact", name="contact")
     */
    public function index()
    {
        $form = $this->createForm(ContactType::class);

        return $this->render('contact/contact.html.twig', [

                       'our_form' => $form->createView(),
        ]);
    }
//    /**
//     * @Route("/contact",name="contact");
//     * @Method({"GET,"POST"})
//     */
//    public function createInvoice(Request $request){
//        $contact = new Concact();
//        $form = $this->createFormBuilder($contact)
//            ->addI('')
//
//    }
}
