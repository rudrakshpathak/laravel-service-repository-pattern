<?php
namespace App\Modules\User\Services;

use \Illuminate\Support\Facades\Facade;

/**
 * Facade for user service
 */
class UserFacade extends Facade
{

    /**
     * Returning service name
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'App\Modules\User\Services\UserService';
    }
}
