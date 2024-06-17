<?php

    if(isset($_POST["submit"])) {
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $usersname = $_POST["userName"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $gender = $_POST["gender"];
        $dob = $_POST["dob"];
        $contact = $_POST["mobile"];     
        $password = $_POST["pwd"];
        $confirmpassword = $_POST["repeat-pwd"];

        require_once 'config.php';
        require_once 'functions.inc.php';

        $invalidUserID = invalidUserID($usersname);
        $passwordMatch = passwordMatch($password, $confirmpassword);
        $userExists = userExistsSignup($conn, $usersname, $email,);

        
        //Check empty inputs
        
        if($invalidUserID !== false){
            header('location:../register.php?error=invaliduid');
            exit();
        }

        //check password matching
        if($passwordMatch !== false){
            header('location:../register.php?error=passworddontmatch');
            exit();
        }
        //check username already exist
        if($userExists !== false){
            header('location:../register.php?error=usernametaken');
            exit();
        }
        createUser($conn, $firstName, $lastName, $usersname, $email, $contact, $address, $gender, $dob, $password);
        
    }
    else{
        header('location:../login.php');
    }