<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
if($_SESSION[type]!='xyz'){
header('location:home.php');
exit();
}
include('config.php');
?>