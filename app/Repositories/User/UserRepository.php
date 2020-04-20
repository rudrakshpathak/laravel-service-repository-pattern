<?php

namespace App\Repositories\User;

use Illuminate\Database\Eloquent\Model;

/**
 * Layer to handle datastore operations. Can be a local operation or external datastore
 */
class UserRepository implements UserInterface
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
     * @param Model $user
     * @return UserRepository
     */
    public function __construct(Model $user)
    {
        $this->userDI = $user;
    }

    /**
     * Fetching user Id for demonstration
     *
     * @param integer $userId
     * @return string
     */
    public function getUserById($userId)
    {
        // Perform operation to local DB with injected dependency
        $this->userDI->getUser($userId);

        //OR call external API to get data
    }
}
