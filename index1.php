<?php
   if( $_REQUEST["name"] || $_REQUEST["age"] ) {
      echo "Welcome ". $_REQUEST['name']. "<br />";
      echo "You are ". $_REQUEST['age']. " years old.";
   }
?>

$_SERVER['REQUEST_METHOD'] == 'POST'
$_SERVER['REQUEST_METHOD'] ==  'GET'