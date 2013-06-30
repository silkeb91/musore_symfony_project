<?php
namespace Acme\MusoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;

class CustomerController extends Controller{
    public function loginAction(){
        $request = $this -> getRequest();
        $session = $request -> getSession();
        //$session->set('name', $value);

        //get login error
        if($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)){
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        }else{
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render('AcmeMusoreBundle:Customer:login.html.twig',
                        array('last_username' => $session->get(SecurityContext::LAST_USERNAME),
                                'error' => $error));
    }

    public function registerAction($step, Request $request){

        $customer = new \Acme\MusoreBundle\Entity\Customer();
        $form = $this->createForm(new \Acme\MusoreBundle\Form\Type\CustomerType(), $customer);

        $form->handleRequest($request);

        if ($form->isValid()) {

            $factory = $this->get('security.encoder_factory');
            $encoder = $factory->getEncoder($customer);
            $password = $encoder->encodePassword($customer->getPassword(), $customer -> getSalt());
            $customer -> setPassword($password);

            // perform some action, such as saving the task to the database
            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($customer);
            $em->flush();
            return $this->redirect($this->generateUrl('login'));
        }

        return $this->render('AcmeMusoreBundle:Customer:register.html.twig', array(
            'form' => $form->createView(),
        ));

    }
}
