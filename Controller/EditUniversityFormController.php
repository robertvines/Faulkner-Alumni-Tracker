<?php

/* 
 * sql to edit information about a university.
 * 
 * @author: Robert Vines
 */
        
    include('/Config.php');    
           
    $uniId = $_GET['edit_id'];
    $uniName = $_POST['uniName'];

    $sql="UPDATE university "
         . "SET UniName= '".$uniName."' WHERE UniversityID=".$uniId;
    $pdo->query($sql);           

    header("Location: /AlumniTracker/View/EditUniversity.php");
?>