<?php

function incompleteInputSignup($fname, $lname, $address, $contactnum, $email, $pasword, $repeatpassword) {
    $result;
    if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($repeatpasswor)) {
        $result = "true";
    } 
    return $result;  
}