<?php
namespace Acme\ServerBundle\Controller\models;
use AppBundle\Entity\company;
use AppBundle\Entity\job_category;

class categoryjoblisting 
{
	public function get($em,$param)
	{
		$from=0;
		$to=10;
		if(isset($_GET['page']))
			$from=(($_GET['page']-1)*10);
		
		$qb = $em->createQueryBuilder();
		$qb->select('j.id id,j.name jobname,c.name cmp_name,j.jobType,j.salary,j.address,c.id cmp_id')
		   ->from('AppBundle\Entity\job', 'j')
   		   ->innerJoin('AppBundle\Entity\company','c','with','j.company=c.id')
   		   ->where('j.published=1')
   		   ->setFirstResult($from)
   		   ->setMaxResults($to);
		if(!empty($param['jobcategory'])&&$param['jobcategory']!='all')
   		$qb->innerJoin("AppBundle\Entity\job_category","jc","with","(j.job_category=jc.id and jc.name like '".$param['jobcategory']."')");
      if(isset($param['searchcondition']) && $param['searchcondition'])
      {
         if(isset($param['cmp_name']))
            $qb->andWhere("c.name like '%".$param['cmp_name']."%'");
         if(isset($param['j_address']))
            $qb->andWhere("j.address like '%".$param['j_address']."%'");
      }

   		$query = $qb->getQuery();
   		$result['joblisting'] = $query->getResult();

   	$qb1 = $em->createQueryBuilder();
		$qb1->select('count(1) totalcount')
		   ->from('AppBundle\Entity\job', 'j')
   		   ->innerJoin('AppBundle\Entity\company','c','with','j.company=c.id')
   		   ->where('j.published=1');
		if(!empty($param['jobcategory'])&&$param['jobcategory']!='all')
   		$qb1->innerJoin("AppBundle\Entity\job_category","jc","with","(j.job_category=jc.id and jc.name like '".$param['jobcategory']."')");
      if(isset($param['searchcondition']) && $param['searchcondition'])
      {
         if(isset($param['cmp_name']))
            $qb1->andWhere("c.name like '%".$param['cmp_name']."%'");
         if(isset($param['j_address']))
            $qb1->andWhere("j.address like '%".$param['j_address']."%'");
      }
   		$query1 = $qb1->getQuery();
   		$query1result=$query1->getResult();
   		$result['stats']['totalpagecount']=ceil($query1result[0]['totalcount']/10);
		return $result;
	}
}
