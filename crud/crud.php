<?php

namespace CrudHandler;

use MongoDB\Driver\Exception\Exception;
use security\Credentials;

require_once("../security/SecLib.php");

class crud
{
        public static function Insert($type, $unsorted, $sorted) {


                $file = "private.json";
                $credentials = \security\SecLib::GetCredentials($file);
                $cred = new \security\Credentials();
                $cred -> SetUser($credentials["user"]);
                $cred -> SetPassword($credentials["password"]);
                $dbh = new \PDO("mysql:host=localhost;dbname=apisort", $cred -> GetUser(), $cred -> GetPassword());

                $req = $dbh->prepare("INSERT INTO sort (Type, Tableau_non_trier, Tableau_trier) VALUES(:Type, :Tableau_non_trier, :Tableau_trier)");

                $req->execute(array(
                    'Type' => $type,
                    'Tableau_non_trier' => $unsorted,
                    'Tableau_trier' => $sorted,
                ));

        }

        public static function Select() {

            $file = "private.json";
            $credentials = \security\SecLib::GetCredentials($file);
            $cred = new \security\Credentials();
            $cred -> SetUser($credentials["user"]);
            $cred -> SetPassword($credentials["password"]);
            $dbh = new \PDO("mysql:host=localhost;dbname=apisort", $cred -> GetUser(), $cred -> GetPassword());

            $stmt = $dbh->prepare("SELECT * FROM sort where Id_Sort = ?");
            $stmt->execute([$_GET['type']]);
            foreach ($stmt as $row) {
                print_r($row);
            }
        }

        public static function Delete(){

            $file = "private.json";
            $credentials = \security\SecLib::GetCredentials($file);
            $cred = new \security\Credentials();
            $cred -> SetUser($credentials["user"]);
            $cred -> SetPassword($credentials["password"]);
            $dbh = new \PDO("mysql:host=localhost;dbname=apisort", $cred -> GetUser(), $cred -> GetPassword());

            $sql = "DELETE FROM sort WHERE id=?";
            $stmt= $dbh->prepare($sql);
            $stmt->execute([$sql]);
        }

        public static function Update($type, $unsorted, $sorted) {

            $file = "private.json";
            $credentials = \security\SecLib::GetCredentials($file);
            $cred = new \security\Credentials();
            $cred -> SetUser($credentials["user"]);
            $cred -> SetPassword($credentials["password"]);
            $dbh = new \PDO("mysql:host=localhost;dbname=apisort", $cred -> GetUser(), $cred -> GetPassword());

            $req = $dbh->prepare('UPDATE sort SET Type = :Type, Tableau_non_trier = :Tableau_non_trier, Tableau_trier = :Tableau_trier WHERE Id_Sort = ?');

            $req->execute(array(
                'Type' => $type,
                'Tableau_non_trier' => $unsorted,
                'Tableau_trier' => $sorted,
            ));
        }
}