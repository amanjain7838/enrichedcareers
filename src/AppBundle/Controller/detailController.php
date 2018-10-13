<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class detailController extends Controller
{
    public function jobDetailAction($id)
    {
        return $this->render('detail/job_detail.html.twig', array(
            // ...
        ));
    }

}
