<?php

/* 
 * Home page for a dean.
 * 
 * @author: Robert Vines
 */
    include('Headers/Header.php');
?>
<div id='page'>
        <div id="body">
          <h2><?php session_start();
                    $fName = $_SESSION[fName];
                    $lName = $_SESSION[lName];
                    echo 'Hello '. $fName .' '. $lName .','; ?></h2>
          <p align="center">Department: 
              <select>
                  <option>CSIS</option>
              </select></p>
              <p align="center">Last Name: <input type="text"></p>
        </div>
</div>
    </body>
</html>
