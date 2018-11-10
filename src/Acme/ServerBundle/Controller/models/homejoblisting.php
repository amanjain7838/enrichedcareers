<?php
namespace Acme\ServerBundle\Controller\models;
use AppBundle\Entity\company;

class homejoblisting 
{
	public function get($em)
	{
		$qb = $em->createQueryBuilder();
		$qb->select('j.id,j.name jobname,c.name cmp_name,j.jobType,j.salary,j.address,c.id cmp_id')
		   ->from('AppBundle\Entity\job', 'j')
   		   ->innerJoin('AppBundle\Entity\company','c','with','j.company=c.id')
   		   ->where('j.published=1')
   		   ->setMaxResults('10');
   		$query = $qb->getQuery();
   		$result = $query->getResult();

		return $result;
	}
	public function dynamicjoblisting($em,$param)
	{
		$from=10;
		$to=10;
		if(isset($param['page']))
		{	$from=($param['page']>1?$param['page']*10:10);
			$to=10;			
		}
		$qb = $em->createQueryBuilder();
   		$qb->select('j.id,j.name jobname,c.name cmp_name,j.jobType,j.salary,j.address,c.id cmp_id')
		   ->from('AppBundle\Entity\job', 'j')
   		   ->innerJoin('AppBundle\Entity\company','c','with','j.company=c.id')
   		   ->where('j.published=1')
   		   ->setFirstResult($from)
   		   ->setMaxResults($to);
   		$query = $qb->getQuery();
   		//echo $query->getSql();exit();
   		$result= $query->getResult();
   		return $result;
	}
}
