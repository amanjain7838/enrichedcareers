<?php

namespace Acme\ServerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\ServerBundle\Controller\models\homejoblisting;
use Symfony\Component\HttpFoundation\JsonResponse;
use Acme\ServerBundle\Controller\models\categoryjoblisting;
use Acme\ServerBundle\Controller\models\jobdetail;

class DefaultController extends Controller
{
    public function indexAction()
    {exit;
        //return $this->render('AcmeServerBundle:Default:index.html.twig');
    }

    public function joblistinghomeAction()
    {
    	if(isset($_GET))
    	{	$em=$this->getDoctrine()->getManager();
    		$homejoblisting=new homejoblisting();
    		$result['joblisting']=$homejoblisting->get($em);
    		return new JsonResponse(array('data' => $result));
    	}
    	else
    	{
    		echo "Unauthorised Access";exit();
    	}
    }
    public function joblistingtypeAction()
    {
    	if(isset($_GET) && isset($_GET['jobcategory']))
    	{	$em=$this->getDoctrine()->getManager();
    		$categoryjoblisting=new categoryjoblisting();
    		$result['data']=$categoryjoblisting->get($em,$_GET);
    		return new JsonResponse(array('result' => $result));
    	}
    	else
    	{
    		echo "Unauthorised Access";exit();
    	}

    }
    public function jobdetailAction()
    {
        if(isset($_GET) && isset($_GET['id']))
        {  
            $em=$this->getDoctrine()->getManager();
            $jobdetail=new jobdetail();
            $result['data']=$jobdetail->get($em,$_GET);
            return new JsonResponse(array('result' => $result));
        }
        else
        {
            echo "Unauthorised Access";exit();
        }

    }
    public function dynamicjoblistinghomeAction()
    {
        if(isset($_GET) && isset($_GET['page']))
        {  
            $em=$this->getDoctrine()->getManager();
            $homejoblisting=new homejoblisting();
            $result['joblisting']=$homejoblisting->dynamicjoblisting($em,$_GET);
            return new JsonResponse(array('data' => $result));
        }
        else
        {
            echo "Unauthorised Access";exit();
        }        
    }
}
