<?php
namespace Acme\ServerBundle\Controller\models;

class jobdetail 
{
	public function get($em,$param)
	{
		$qb = $em->createQueryBuilder();
		$qb->select('j.name jobname,c.name cmp_name,c.sdetail sdetail,c.ldetail,j.address,j.jobType jobType,j.salary,jd.id,jd.responsibility,jd.requirement,jd.qualification,jd.postedOn,jd.lastDate,jd.applylink')
		   ->from('AppBundle\Entity\job', 'j')
   		   ->innerJoin('AppBundle\Entity\company','c','with','j.company=c.id')
   		   ->leftJoin('AppBundle\Entity\job_detail','jd','with','j.id=jd.job')
   		   ->where('j.id='.$param['id']);
   		$query = $qb->getQuery();
   		$result = $query->getResult();

		return $result;exit();
	}
}
