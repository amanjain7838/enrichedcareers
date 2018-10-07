<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="user")
*/
class user
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
 * @ORM\Column(type="string")
 */
  private $password;

  /**
   * @ORM\Column(type="string", nullable=true)
   */
  private $description;

  public function getName()
  {
      return $this->name;
  }

  public function setName($name)
  {
      $this->name=$name;
  }

  public function getPassword()
  {
      return $this->password;
  }

  public function setPassword($password)
  {
      $this->password=$password;
  }


    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description=$description;
    }

}
