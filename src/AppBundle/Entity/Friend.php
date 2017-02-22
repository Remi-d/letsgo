<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="friend")
 */
class Friend
{
    /**
     * @ORM\Column(name="id_user1",type="integer")
     */
    private $idUser1;

    /**
     * @ORM\Column(name="id_user2",type="integer")
     */
    private $idUser2;

    /**
     * @return mixed
     */
    public function getIdUser1()
    {
        return $this->idUser1;
    }

    /**
     * @param mixed $idUser1
     * @return Friend
     */
    public function setIdUser1($idUser1)
    {
        $this->idUser1 = $idUser1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdUser2()
    {
        return $this->idUser2;
    }

    /**
     * @param mixed $idUser2
     * @return Friend
     */
    public function setIdUser2($idUser2)
    {
        $this->idUser2 = $idUser2;
        return $this;
    }


}