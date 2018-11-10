<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="job_detail")
*/
class job_detail
{
    /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
    private $id;
   /**
   * @ORM\ManyToOne(targetEntity="job")
   */
    private $job;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $responsibility;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $requirement;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $qualification;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $applylink;
    /**
     * @ORM\Column(type="datetime", options={"default":"CURRENT_TIMESTAMP"})
     */
    private $postedOn;
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastDate;
    
    public function getId()
    {
        return $this->id;
    }

    public function getJob()
    {
        return $this->job;
    }

    public function setJob(Job $job)
    {
        $this->job=$job;
    }
    public function getResponsibility()
    {
        return $this->responsibility;
    }

    public function setResponsibility($responsibility)
    {
        $this->responsibility=$responsibility;
    }

    public function getRequirement()
    {
        return $this->requirement;
    }

    public function setRequirement($requirement)
    {
        $this->requirement=$requirement;
    }

    public function getQualification()
    {
        return $this->qualification;
    }

    public function setQualification($qualification)
    {
        $this->qualification=$qualification;
    }
    
    public function getApplylink()
    {
        return $this->applylink;
    }

    public function setApplylink($applylink)
    {
        $this->applylink=$applylink;
    }

    public function getPostedOn()
    {
        return $this->postedOn;
    }

    public function setPostedOn($postedOn)
    {
        $this->postedOn=$postedOn;
    }
    public function getLastDate()
    {
        return $this->lastDate;
    }

    public function setLastDate($lastDate)
    {
        $this->lastDate=$lastDate;
    }
      
}
