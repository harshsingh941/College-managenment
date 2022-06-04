<?php

    if (isset($_POST['login'])) {
        $email=$_POST['email'];
        $pass=$_POST['password'];

        if($email=='admin@example.com' && $pass=='admin@cms'){
            session_start();
            $_SESSION['login']=true;
            header('location: ../admin/dashboard.php');
        }
        else {
            echo'Invalid password';
        }
    }
