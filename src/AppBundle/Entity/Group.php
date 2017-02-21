<?php
/**
 * Created by PhpStorm.
 * User: Remi
 * Date: 20/02/2017
 * Time: 18:57
 */

namespace AppBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="squad")
 */
class Group
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
    private $idOwner;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Group
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdOwner()
    {
        return $this->idOwner;
    }

    /**
     * @param int $idOwner
     * @return Group
     */
    public function setIdOwner($idOwner)
    {
        $this->idOwner = $idOwner;
        return $this;
    }

}