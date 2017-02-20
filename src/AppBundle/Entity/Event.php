<?php

namespace AppBundle\Entity;


use Symfony\Component\Validator\Constraints\DateTime;

class Event
{
    /** @var  int */
    private $id;

    /** @var  string */
    private $game;

    /** @var  string */
    private $location;

    /** @var  DateTime */
    private $start_date;

    /** @var  DateTime */
    private $creation_date;



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
    public function getGame()
    {
        return $this->game;
    }

    /**
     * @param string $game
     * @return Event
     */
    public function setGame($game)
    {
        $this->game = $game;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     * @return Event
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * @param DateTime $start_date
     * @return Event
     */
    public function setStartDate($start_date)
    {
        $this->start_date = $start_date;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    /**
     * @param DateTime $creation_date
     * @return Event
     */
    public function setCreationDate($creation_date)
    {
        $this->creation_date = $creation_date;
        return $this;
    }

}