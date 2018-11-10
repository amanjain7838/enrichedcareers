<?php

namespace Acme\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\job;
use AppBundle\Entity\company;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
      // $user=new job();
      // $em=$this->getDoctrine()->getManager();
      // //$company=$em->getRepository('AppBundle:company')->findAll();
      // $company=$em->getRepository('AppBundle:company')->findOneBy(['id'=>'1']);
      // $user->setCompanyId($company);
      // $user->setName('sdadad');
      // $user->setJobType(1);
      // $user->setSalary(1000);
      // $user->setDescription("sdasdasd");
      // $user->setPublished(1);
      // $em->persist($user);
      // $em->flush();
      $result=file_get_contents("http://local.kunalmarble.com/server/joblistinghome");
      $result=json_decode($result,true);
      return $this->render('@AcmeClient/default/index.html.twig',array(
            "result" => $result));
    }
    public function indexsAction(Request $request)
    {
      // $user=new user();
      // $user->setName('sdadad');
      // $em=$this->getDoctrine()->getManager();
      // $em->persist($user);
      // $em->flush();

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
