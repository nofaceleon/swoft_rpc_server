<?php

namespace App\Rpc\Service;

use App\Rpc\Lib\UserInterface;
use Swoft\Rpc\Server\Annotation\Mapping\Service;

/**
 * Class UserService
 * @package App\Rpc\Service
 * @Service()
 *
 */
class UserService implements UserInterface
{


    /**
     * @param $user_id
     * @return mixed|void
     */
    public function getUserInfo($user_id)
    {

        return [
            'user_id' => $user_id
        ];

    }


    /**
     * @return mixed|string[]
     */
    public function getUserList()
    {
       return [
           '001',
           '002',
           '003'
       ];
    }

    /**
     * @param $user_id
     * @return bool|mixed
     */
    public function delUserInfo($user_id)
    {
        return true;
    }
}
