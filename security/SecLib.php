<?php

namespace security;

require_once ("credentials.php");

class SecLib
{
    public  static  function GetCredentials($file){
        $root =   $_SERVER["DOCUMENT_ROOT"]; // C:wamp64/www/
        $path =  $root."/../Credentials/"; // le doc credential est dans c:wamp64

        //echo $root,$path;

        $json = json_decode(file_get_contents($path.$file),true); //$_SERVER["DOCUMENT_ROOT"]

         $array = ['user'=>$json['user'],'password'=>$json['password']];
         return $array;
    }






}



