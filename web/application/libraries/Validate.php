<?php

/**
 * Created by PhpStorm.
 * User: jenwi
 * Date: 25-Oct-18
 * Time: 19:10
 */
class Validate
{
    /**
     * Check if no post then go back to previous page
     */
    public function is_post()
    {
        if(count($_POST) === 0)
        {
            return false;
        }
        return true;
    }

    public function is_login()
    {
        if(!isset($_SESSION['users']))
        {
            return false;
        }
        return true;
    }

}