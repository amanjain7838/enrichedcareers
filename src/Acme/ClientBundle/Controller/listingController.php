<?php

namespace Acme\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class listingController extends Controller
{
    public function categoryAction($type="")
    {

        if(isset($_GET['page']))
        	$page=$_GET['page'];
        else	
		    $page=1;
        $searchcondition['page']=$page;
        if(isset($_GET['searchcondition']) && $_GET['searchcondition'])
        {
            $searchcondition['searchcondition']=true;
            if(isset($_GET['cmp_name']))
                $searchcondition["cmp_name"]=$_GET['cmp_name'];
            if(isset($_GET['j_address']))
               $searchcondition["j_address"]=$_GET['j_address'];
        }
    	$result=file_get_contents("http://local.kunalmarble.com/server/joblisting?jobcategory=".urlencode($type)."&".http_build_query($searchcondition));
	    $result=json_decode($result,true);
        return $this->render('@AcmeClient/listing/category.html.twig', array("result" => $result,"page" => $page,"type" =>$type));
    }

}
