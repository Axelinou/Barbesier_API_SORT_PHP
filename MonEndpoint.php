<?php

require ("ArrayList.php");
require ("..\crud\crud.php");
class monEndpoint{

    static function Routing() {
        $args = $_GET;
        $arg = json_decode($_GET["get"] ,true) ;
        echo "Type de tri :"," ", $args["type"], "<br>";
        $unsortedlist = implode(" ", $arg);
        echo "Tableau non trié :", $unsortedlist, "<br>";

        switch ($args["type"]){
            case "InsertSort" :
                $argSort = ArrayList::InsertSort($arg);


                $str = "";
                $len = count($argSort);

                for($i = 0 ; $i < $len ; $i++) {
                    $str = $str.$argSort[$i];

                    if ($i != $len -1) {
                        $str = $str.",";
                    }


                }

                echo "Tableau trié :", " ", $str;
                $sorted = $str;
                $type = "InserSort";
                $unsorted = $_GET["get"];

                CrudHandler\crud::Insert($type, $unsorted, $sorted);
                CrudHandler\crud::Select();
            break;

            case "QuickSort" :
                $argSort = ArrayList::QuickSort($arg);


                $str = "";
                $len = count($argSort);

                for($i = 0 ; $i < $len ; $i++) {
                    $str = $str.$argSort[$i];

                    if ($i != $len -1) {
                        $str = $str.",";
                    }

                }

                echo "Tableau trié :", " ", $str;
                $sorted = $str;
                $type = "QuickSort";
                $unsorted = $_GET["get"];

                CrudHandler\crud::Insert($type, $unsorted, $sorted);
                CrudHandler\crud::Select();
            break;

            default :
                echo " : l'argument type n'est pas correctement ecris et/ou n'est pas disponible (lire le read.me)";
            }
        }


    }