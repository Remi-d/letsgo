<?php
/**
 * Created by PhpStorm.
 * User: Remi
 * Date: 20/02/2017
 * Time: 18:57
 */

namespace AppBundle\Entity;


class Group
{
    /** @var  int */
    private $id;

    /** @var  string */
    private $name;

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

}