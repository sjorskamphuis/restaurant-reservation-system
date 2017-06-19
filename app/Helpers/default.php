<?php
/**
 * Created by PhpStorm.
 * User: sjors
 * Date: 18-06-17
 * Time: 18:06
 */

/**
 * This will check if the user will be a super-admin
 * @param $user
 * @param $role
 * @return bool
 */
function hasRole($user, $role) {

    $return = false;

    foreach($user->roles as $key => $item) {
        if($item->role == $role) return true;
    }

    return $return;

}