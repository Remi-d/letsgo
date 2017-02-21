<?php
/**
 * Created by PhpStorm.
 * User: Remi
 * Date: 20/02/2017
 * Time: 18:59
 */

namespace AppBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="squad_user")
 */
class GroupUser
{
    /**
     * @ORM\Column(type="integer")
     */
    private $idGroup;

    /**
     * @ORM\Column(type="integer")
     */
    private $idUser;



    /**
     * @return int
     */
    public function getIdGroup()
    {
        return $this->idGroup;
    }

    /**
     * @param int $idGroup
     * @return GroupUser
     */
    public function setIdGroup($idGroup)
    {
        $this->idGroup = $idGroup;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param int $idUser
     * @return GroupUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
        return $this;
    }

}