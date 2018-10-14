<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class freelancerController extends Controller
{
    public function freelancerDetailAction($freelancer_id)
    {
        return $this->render('freelancer/freelancer-detail.html.twig', array(
            // ...
        ));
    }

}
