<?php

namespace AppBundle\Controller;


use FOS\RestBundle\Controller\FOSRestController;

class UserController extends FOSRestController
{
    public function getUserAction()
    {
        $userService = $this->get('user_service');
        $users = $userService->getUserByName('Remi');

        $view = $this->view($users, 200);

        return $this->handleView($view);
    }

    public function createNewUserAction()
    {
        $userService = $this->get('user_service');
        $users = $userService->getUserByName('Remi');
    }
}