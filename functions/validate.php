<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


function generate_txref(){
    $token = "tx-"; 

    $alphabets = ['1','2','3','4','5','6','7','8','9','a','b','c','d','e','f','g','h','i','j','k','l','m','n','p','q','r','s','t','u','v','w','x','y','A','B','C','D','E','F','G','H','I','k','L','M','N','P','Q','R','S','T','U','V','W','X','Y','Z'];

    for($i = 0 ; $i < 7 ; $i++){

      $index = mt_rand(0,count($alphabets)-1);
      $token .= $alphabets[$index];
    }

    return $token;
}