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
   * @ORM\Column(type="integer")
   */
    private $jobType;
    /**
     * @ORM\ManyToOne(targetEntity="Company")
    */
    private $companyId;
    /**
     * @ORM\Column(type="integer")
     */
    private $salary;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $description;
    /**
   * @ORM\Column(type="integer")
   */
    private $published;

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

    public function getPublished()
    {
        return $this->published;
    }

    public function setPublished($published)
    {
        $this->published=$published;
    }

}
