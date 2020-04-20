<?php

namespace App\Repositories\User;

/**
 * Interface functions for user repository
 */
interface UserInterface
{
    /**
     * Fetching user Id for demonstration
     *
     * @param integer $userId
     * @return string
     */
    public function getUserById($userId);
}
