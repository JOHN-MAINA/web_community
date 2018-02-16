<?php

    require 'env.php';

    function connect () {
        $result = false;

       $conn = new PDO('mysql:host='.HOST.';dbname='.DB_NAME, USER_NAME, PASS);

       if ($conn) {
           $result = $conn;
       }

       return $result;
    }

   function fetchUsers() {
        $conn = connect();

        $users = $conn->query("SELECT * FROM user");

       return $users;
   }



?>
