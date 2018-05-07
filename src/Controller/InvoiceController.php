<?php

namespace App\Controller;

use App\Entity\Invoice;

//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class InvoiceController extends AbstractController
{

    /**
     * @Route("/",name="hello_page");
     * @Method({"GET"})
     */
    public function index()
    {
        $invoices = $this->getDoctrine()->getRepository(Invoice::class)->findAll();
        return $this->render('hello_page.html.twig', array ('invoices'=>$invoices));
    }
//
//    /**
//     * @Route("/invoice/save")
//     */
//    public function save(Request $request){
//
//        $entityManager = $this->getDoctrine()->getManager();
//        $invoice = new Invoice();
////            $form = $this->createForm(ContactType::class, $invoice);
////            $form->handleRequest($request);
////            if($form->isSubmitted() && $form->isValid()){
////                $task=$form->getData();
////
////                     $entityManager->persist($invoice);
////       // $entityManager->flush();
//              // return $this->redirectToRoute('')
////            }
//        $invoice->setInvoicenumber(123);
//        $invoice->setName("invoice 3");
//        $invoice->setTotal("2322");
//        $invoice->setMycompany("MyCompany");
//        $invoice->setCompany("Blue");
//        $invoice->setItem("item1");
//        $invoice->setNotes("this is the notes");
//        $invoice->setDate("2018-01-21");
//        $invoice->setAddress("2201 Love");
//        $invoice->setAddressCity("Frisco");
//        $invoice->setAddressState("Texas");
//        $invoice->setBalance("2322");
//
//                             $entityManager->persist($invoice);
//        $entityManager->flush();
//        return new Response('saved and invoice with id: '.$invoice->getId());
//
//    }

    /**
     * @Route("/invoice/{id}",name="invoiceShow");
     */
    public function shownvoice($id)
    {
        $invoice = $this->getDoctrine()->getRepository(Invoice::class)->find($id);
        return $this->render('invoice/invoiceShow.html.twig', array ('invoice'=>$invoice));
    }




    /**
     * @Route("/update/{id}",name="updateInvoice");
     */
    public function updateInvoice($id){
    $entityManager = $this->getDoctrine()->getManager();
    $post = $entityManager->getRepository('App:Invoice')->find();
    if(!$post){
        throw $this->createNotFoundException('No product foun for id '.$id);
    }


    $post->setName('newname');
    $entityManager->flush();

    return $this->redirectToRoute('invoiceShow',['id'=>$post->getId()
    ]);


    }
    /**
     * @Route("/remove/{id}",name="removeInvoice");
     */
    public function removeInvoice($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $post = $entityManager->getRepository('App:Invoice')->find();
        $entityManager->remove($post);
        $entityManager->flush();

    }


}