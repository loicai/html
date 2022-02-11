<?php 

    function acces_bdd(){
        try {
            $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            );
            $bdd = new PDO('mysql:host=localhost;dbname=tp_ajax', 'root', '', $options);
        } catch (Exception $th) {
            echo 'erreur: ' + $th->getMessage();
        }
    }

?>