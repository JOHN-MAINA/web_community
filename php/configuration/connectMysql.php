<?php
    require 'env.php';

    function connect () {
        $result = false;
        $conn = new mysqli(HOST, USER_NAME, PASS, DB_NAME);

        if ($conn){
            $result = $conn;
        }

        return $result;
    }

   function fetchUsers () {

        $conn = connect();
       $users = $conn->query("SELECT * FROM user");

       return $users;

   }

?>
