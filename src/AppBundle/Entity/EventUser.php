<?php
/**
 * Created by PhpStorm.
 * User: Remi
 * Date: 20/02/2017
 * Time: 18:56
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="event_user")
 */
class EventUser
{
    /**
     * @ORM\Column(type="integer")
     */
    private $idEvent;

    /**
     * @ORM\Column(type="integer")
     */
    private $idUser;

    /**
     * @ORM\Column(type="boolean")
     */
    private $accept;


    /**
     * @return int
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * @param int $idEvent
     * @return EventUser
     */
    public function setIdEvent($idEvent)
    {
        $this->idEvent = $idEvent;
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
     * @return EventUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAccept()
    {
        return $this->accept;
    }

    /**
     * @param bool $accept
     * @return EventUser
     */
    public function setAccept($accept)
    {
        $this->accept = $accept;
        return $this;
    }



}