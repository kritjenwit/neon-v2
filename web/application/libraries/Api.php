<?php

/**
 * Created by PhpStorm.
 * User: jenwi
 * Date: 25-Oct-18
 * Time: 16:41
 */
class Api
{
    /**
     * @param string $url
     * @param string $param
     * @return array
     */
    public function post($url,$param)
    {
        // alert($new_param);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST, 1);
        // curl_setopt($ch, CURLOPT_POSTFIELDS,"postvar1=value1&postvar2=value2&postvar3=value3");
        // In real life you should use something like:
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
        curl_close ($ch);
        return json_decode($server_output,true);
    }

    /**
     * @param string $method
     * @param string $param
     * @return array
     */
    public function get($method, $param=NULL)
    {
        $api_url = API;
        $ch = curl_init();
        $url = $param === NULL ? $api_url.$method : $api_url.$method.'/'.$param;
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
        curl_close ($ch);
        return json_decode($server_output,true);
    }

    public function put($method,$param=NULL)
    {

    }

    public function delete($method,$param=NULL)
    {

    }
}