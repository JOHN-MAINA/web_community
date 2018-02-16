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

       foreach ($users as $user) {
           echo "First Name: \t" . $user['fname'] . "\t Second Name: \t". $user['sname'] . " \t Email: \t" . $user['email'] . '<br>';
       }

   }

   fetchUsers();
?>
