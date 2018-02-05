<?php

$db=new mysqli('localhost','tcmartinez17f','40frunner','tcmartin_friendsDatabase');

if($db->connect_errno) {

  echo $db->connect_error;
  die('Sorry, we are having some problems.');
}
  echo "Connected successful ";
?>
