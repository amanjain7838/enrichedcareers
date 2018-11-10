<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="job")
*/
class job
{
    /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
    private $id;
    /**
   * @ORM\Column(type="string")
   */
    private $name;
    /**
   * @ORM\Column(type="integer",options={"comment":"1-Fulltime,2-Parttime"})
   */
    private $jobType;
    /**
     * @ORM\ManyToOne(targetEntity="company")
    */
    private $company;
    /**
     * @ORM\Column(type="string")
     */
    private $salary;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $description;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $address;
    /**
   * @ORM\Column(type="integer")
   */
    private $published;
    /**
     * @ORM\ManyToOne(targetEntity="job_category")
    */
    private $job_category;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name=$name;
    }

    public function getJobType()
    {
        return $this->jobType;
    }

    public function setJobType($jobType)
    {
        $this->jobType=$jobType;
    }

    public function getCompanyId()
    {
        return $this->companyId;
    }

    public function setCompanyId(Company $companyId)
    {
        $this->companyId=$companyId;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary=$salary;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description=$description;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address=$address;
    }
    public function getPublished()
    {
        return $this->published;
    }

    public function setPublished($published)
    {
        $this->published=$published;
    }
    public function getJobCategory()
    {
        return $this->jobCategory;
    }

    public function setJobCategory(JobCategory $jobCategory)
    {
        $this->jobCategory=$jobCategory;
    }

}
