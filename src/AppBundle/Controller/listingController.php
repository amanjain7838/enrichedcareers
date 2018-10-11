<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class listingController extends Controller
{
    public function categoryAction()
    {
        return $this->render('listing/category.html.twig', array(
            // ...
        ));
    }

}
