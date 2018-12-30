<?php
/**
 * Created by PhpStorm.
 * User: jenwi
 * Date: 29-Oct-18
 * Time: 17:11
 */

if(!function_exists('alert'))
{
    /**
     * Alert
     *
     *
     * Show array or any variable inside <pre> tag
     *
     * @param array $data
     *
     */

    function alert($data)
    {
        echo '<pre>';
        if(is_array($data))
        {
            print_r($data);
        }elseif (is_string($data))
        {
            echo $data;
        }
        echo '</pre>';
    }
}

if(!function_exists('alert_exit'))
{
    /**
     * Alert and Exit
     *
     *
     * Show array or any variable inside <pre> tag
     *
     * @param array $data
     *
     */

    function alert_exit($data)
    {
        echo '<pre>';
        if(is_array($data))
        {
            print_r($data);
        }elseif (is_string($data))
        {
            echo $data;
        }
        echo '</pre>';
        exit();
    }
}