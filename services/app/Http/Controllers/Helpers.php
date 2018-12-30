<?php
/**
 * Created by PhpStorm.
 * User: jenwi
 * Date: 29-Oct-18
 * Time: 22:09
 */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;



class Helpers
{

    /**
     * @param int $status
     * @param mixed $data
     * @param string $message
     * @return array
     */
    public static function sendWith($status, $data=NULL,$message=NULL)
    {
        return
        [
            'status' => $status,
            'msg' => $message,
            'data' => $data,
            'total' => $data === NULL ? 0 : count($data),
            'author' => 'Jenwit Suwech',
            'version' => '1.0.0',
            'remark' => 'COPYRIGHT project Neon'
        ];
    }
}