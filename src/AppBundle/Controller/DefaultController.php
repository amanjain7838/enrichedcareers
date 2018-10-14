<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\user;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
      $user=new user();
      $user->setName('sdadad');
      $user->setPassword('sdadad');
      $em=$this->getDoctrine()->getManager();
      $em->persist($user);
      $em->flush();

      return $this->render('default/index.html.twig');
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
