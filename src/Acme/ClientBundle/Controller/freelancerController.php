<?php

namespace Acme\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class freelancerController extends Controller
{
    public function freelancerDetailAction($freelancer_id)
    {
        return $this->render('@AcmeClient/freelancer/freelancer-detail.html.twig', array(
            // ...
        ));
    }
    public function freelancerListingAction()
    {
        return $this->render('@AcmeClient/freelancer/freelancer-listing.html.twig', array(
            // ...
        ));
    }

}
