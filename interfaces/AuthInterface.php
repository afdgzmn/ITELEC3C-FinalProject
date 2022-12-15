<?php

interface AuthInterface {
    /**
     * Login user by setting user uid as session id
     * @param uid
     * @param usertype
     */
    function login($uid, $user_type);
    
}

?>