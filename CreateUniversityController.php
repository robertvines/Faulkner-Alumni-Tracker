<?php
/* 
 * Send university name to database.
 * 
 * @author: Robert Vines
 */

    include ('Config.php');
//    $connString = "mysql:host=localhost;dbname=alumnitracker";
//    $user ="root";
//    $pass ="root";
//    
//    
//    $pdo = new PDO($connString, $user, $pass);
//    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
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
    
    header("Location: EditUniversity.php");
?>
