<?php
namespace Eduardom\SenderGlobal\Api;

/*
* Main class
*/

abstract class Client
{

    public function get($params, $urlApi)
    {
        $postfields = '';
        foreach ($params as $key => $value) {
            $postfields .= "{$key}={$value}&";
        }

        $postfields = rtrim($postfields, '&');
        $handler = curl_init();
        curl_setopt($handler, CURLOPT_URL, $urlApi);
        curl_setopt($handler, CURLOPT_POST, 1);
        curl_setopt($handler, CURLOPT_POSTFIELDS, $postfields);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handler, CURLOPT_CONNECTTIMEOUT, 0); 
        curl_setopt($handler, CURLOPT_TIMEOUT, 15);
        $res = curl_exec($handler);

        return $res;
    }
}