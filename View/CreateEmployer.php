<?php

/* 
 * Form to create an alumni.
 * 
 * @author: Robert Vines
 */

    include('Header.php');  
?>

<style>
    td {
        font-weight: bold;
    }
</style>

<div id='page'>
    <h1>Create Employer</h1>
        <div id="body">
            <form method='post' action="/AlumniTracker/Controller/CreateEmployerController.php">
                <table id="formTable">
                    <tr>
                        <td>Employer Name:</td><td><input type="text" name="EmpName" /></td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td><td><input type="text" name="EmpNum" placeholder="999-999-9999" /></td>
                    </tr>
                    <tr>
                        <td>Employer Company:</td><td><input type="text" name="EmpComp" /></td>
                    </tr>
                    <tr>
                        <td>Employer email:</td><td><input type="email" name="EmpEmail" /></td>
                    </tr>
                </table>
                <br>
                <input type="submit" value="Create Employer" />
            </form>
    </div>
</div>
</body>
</html>
