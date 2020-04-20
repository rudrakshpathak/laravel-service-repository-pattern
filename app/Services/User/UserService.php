<?php

namespace App\Services\User;

use App\Repositories\User\UserInterface;

/**
 * Layer to call and perform datastore operations
 */
class UserService
{

    /**
     * Variable to hold injected dependency
     *
     * @var [type]
     */
    protected $userDI;

    /**
     * Initializing the instances and variables
     *
     * @param userInterface $userDI
     */
    public function __construct(UserInterface $userDI)
    {
        $this->userDI = $userDI;
    }

    /**
     * Method to get user details
     *
     * @param integer $user
     * @return string
     */
    public function getUser($user)
    {
        return $this->userDI->getUserById($user);
    }
}
