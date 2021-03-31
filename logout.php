<?php

  //logout.php
  session_start();
 include_once "logoutBL.class.php";

  $logoutBL = new LogoutBL();
  $logoutBL->LogoutUser();
?>