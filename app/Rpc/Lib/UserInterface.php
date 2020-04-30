<?php

namespace App\Rpc\Lib;

/**
 * Interface UserInterface
 * @package App\Rpc\Lib
 */
interface UserInterface
{

    /**
     * @return mixed
     */
    public function getUserList();


    /**
     * @param $user_id
     * @return mixed
     */
    public function getUserInfo($user_id);


    /**
     * @param $user_id
     * @return mixed
     */
    public function delUserInfo($user_id);
}
