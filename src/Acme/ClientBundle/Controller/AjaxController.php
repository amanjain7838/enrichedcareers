<?php

namespace Acme\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AjaxController extends Controller
{
    public function indexcontentAction()
    {
        if($_POST)
        {
        	if(isset($_POST['page']))
	        	$page=$_POST['page'];
	        else	
			    $page=1;
        	$result=file_get_contents("http://local.kunalmarble.com/server/dynamicjoblistinghome?page=".$page);
	        $result=json_decode($result,true);
	        if(empty($result))
	        	{exit;}
			return $this->render('@AcmeClient/default/dynamiccontent.html.twig',array(
            "result" => $result));
		}
    	else
    	{
    		echo "Unauthorised Access";exit();
    	}
    }

}
