<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="company")
*/
class company
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
   * @ORM\Column(type="string",nullable=true)
   */
    private $sdetail;
    /**
   * @ORM\Column(type="string",nullable=true)
   */
    private $ldetail;

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
    public function getSdetail()
    {
        return $this->sdetail;
    }

    public function setSdetail($sdetail)
    {
        $this->sdetail=$sdetail;
    }
}
