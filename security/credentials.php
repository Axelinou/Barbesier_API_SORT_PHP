<?php

namespace security;
class Credentials {
  public string $user ;
   public string $password ;

     function FetchCredentials() {

        $cred = [];
        $cred[] = $this -> user;
        $cred[] = $this -> password;
        return $cred;

    }

    public function SetPassword(string $pwd) :void{
        $this -> password = $pwd;
    }

    public function SetUser(string $usr) :void{
        $this -> user = $usr;
    }

    public function GetPassword() {
        return $this -> password;
    }

    public function GetUser() {
        return $this -> user;
    }
}


