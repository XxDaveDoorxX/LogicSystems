<?php
session_name("sadmin");
session_start();
session_destroy();
if (!(isset($_REQUEST['privado'])))
 {
  header('Location: ../index.php');
 }
else
 header('Location: ../index.php');
 
 
 /*if (!(isset($_REQUEST['privado'])))
 {
  header('Location:index.php');
 }
else
 header('Location:index.php');*/
 
?>

