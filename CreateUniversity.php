 <?php

/* 
 * 
 * 
 * @author: Robert Vines
 */

?>

<html>
    <head>
        <title>Create University</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="AlumniTracker.css" type="text/css"/>
    </head>
    <body>
        <img src="Images/AlumniTrackerLogo.jpg" alt="Faulkner University Alumni 
             Tracker" id="logo">
        <div id="header"></div>
        <div id="nav">
            <ul>
                <li><a id="user" href="EditUser.php">User</a></li>
                <li><a href="EditMajor.php">Major</a></li>
                <li><a href="EditDepartment.php">Department</a></li>
                <li><a href="EditEmployer.php">Employer</a></li>
                <li><a href="EditUniversity.php"><span id="current">University</span></a></li>
            </ul>
        </div>
        <div id="body">
            <h2>Create University</h2>
            <form method='post' action="CreateUniversityController.php">
                <table id="tablebody">
                    <tr>
                        <th>University Name:</th><th><input type="text" name="UniName"></th>
                    </tr>
                </table>
                <br>
                <input type="submit" value="Create University">
            </form>
        </div>
    </body>
</html>