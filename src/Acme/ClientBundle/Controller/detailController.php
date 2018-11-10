<?php

namespace Acme\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class detailController extends Controller
{
    public function jobDetailAction($id)
    {

      $result=file_get_contents("http://local.kunalmarble.com/server/jobdetail?id=".$id);
      $result=json_decode($result,true);
      return $this->render('@AcmeClient/detail/job_detail.html.twig',array(
            "result" => $result));
    }

}
