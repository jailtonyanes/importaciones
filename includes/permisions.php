<?php
session_start();
 if(!isset($_SESSION['user_authorized']))
 { 
  header("Location: ../../index.php"); 
 }
 else
 {
 	if($_SESSION['cambio']=='1')
 	{
      header("Location: ../../index.php");
 	}
 }




?>