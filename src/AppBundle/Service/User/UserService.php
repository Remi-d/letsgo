<?php

namespace AppBundle\Service\User;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

class UserService
{
    /** @var  EntityRepository */
    private $userRepository;

    /** @var  EntityManager */
    private $em;

    /**
     * UserService constructor.
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
        $this->userRepository = $this->em->getRepository('AppBundle:User');
    }


    public function createUser($pseudo, $password)
    {
        $newUser = new User();
        $newUser->setPseudo($pseudo);
        $newUser->setPassword($password);
        $newUser->setAvatar('default');

        $this->em->persist($newUser);
        $this->em->flush();
    }

    public function getUserByName($name)
    {
        return $this->userRepository->findByPseudo($name);
    }



}
