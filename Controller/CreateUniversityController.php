<?php
/* 
 * Send university name to database.
 * 
 * @author: Robert Vines
 */

    include('/Config.php');
    
     //data from CreateDepartment form
    $uniName = $_POST['UniName'];
    
    try
    {
    $sql = "INSERT INTO university (UniName) VALUES ('".$uniName."')";
    
    $pdo->exec($sql);
    echo 'yay';
    } 
    catch (Exception $ex) 
    {
        echo "Connection Failed: " . $ex->getMessage();
    }
    
    header("Location: /AlumniTracker/View/EditUniversity.php");
?>