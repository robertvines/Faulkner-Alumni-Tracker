<?php

/* 
 * Page that starts login session and verifies login information
 * 
 * @author: Robert Vines
 */

    // Start Session because we will save some values to session varaible.
    ob_start();    
    session_start();
    // include config file for php connection
            include("Config.php");
    // memebers table name
    $tbl_name="login";
    // Define $myusername and $mypassword
    $myusername=$_POST['UserName']; 
    $mypassword=$_POST['Password']; 
    // To protect MySQL injection
    $myusername = stripslashes($myusername);
    $mypassword = stripslashes($mypassword);
    $myusername = mysql_real_escape_string($myusername);
    $mypassword = mysql_real_escape_string($mypassword);
    //below query will check username and password exists in system or not
     
    $sql="SELECT * FROM ".$tbl_name." WHERE UserName='".$myusername."' AND Password='".$mypassword."';";
    $result = $pdo->query($sql);
    
    // Mysql_num_row is used for counting table records
    $count = $result->rowCount();
     
    // If result matched $myusername and $mypassword, table record must be equal to 1 	
    if($count==1)
    {
        
            $sql2="SELECT schoolemployee.Role, department.DeptName, login.UserName, login.Password"
                                . " FROM schoolemployee "
                                . "JOIN department "
                                . "ON schoolemployee.Department_DepartmentID = department.DepartmentID "
                                . "JOIN login "
                                . "ON schoolemployee.Login_LoginID = login.LoginID"
                                . " WHERE login.UserName='".$myusername."' AND login.Password='".$mypassword."';";
            $row=$pdo->query($sql2);
           
            While($result = $row->fetch())
                {
                    $_SESSION['role']=$row['Role'];
                    $_SESSION["deptName"]="$row[1]";
                    $_SESSION["userName"]="$row[2]";
                    $_SESSION["password"]="$row[3]";
                }
    //Depending on type of user we will redirect to various pages		
            if($row['Role'] == 'Admin')	 { header( "location:AdminHome.php"); 	}
            else if($row[0] == 'xyz')	 { header( "location:http://localhost/xyz.php"); 	}
            else if($row[0] == 'Admin')	 { header( "location:AdminHome.php"); 	}
            else    {   header( "location:Login.php");  }
    }
    else
    {
            header("Login.php");
    }
    
    ob_end_flush();
?>