<?php

namespace AppBundle\Controller;


use FOS\RestBundle\Controller\FOSRestController;

class UserController extends FOSRestController
{
    public function getUserAction()
    {
        $users = ['Remi', 'Raisin', 'Tabzac'];
        $view = $this->view($users, 200);

        return $this->handleView($view);
    }
}