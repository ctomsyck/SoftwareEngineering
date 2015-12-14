<?php
    ob_start();?>

    <?php 
session_start();   
$username = $_SESSION['username'];
$role = $_SESSION['role'];
$ID = $_SESSION['ID'];
 if($role == '5' || $role == '1'){
 ?>

        <html>

        <head>
            <link type="text/css" rel="stylesheet" href="stylesheet.css" />
            <title>Managing Editor Main</title>
        </head>

        <body id="body1">
            <div id="header">
                <img src="image/title.png" width="423px" height="126px">
            </div>
            <br>
            <br>
            <div class="wrapper">
                <div id="content">
                    <a href="assignAssociateEditor.php">Assign a manuscript to an associate editor</a>
                    <br>
                    <a href="merecomendation.php">Make recommendation for a title</a>
                    <br>
                    <a href="mesearch.php">Search</a>
                    <br>
                </div>
                <div class="push"></div>
            </div>
            <footer>Copyright &copy; 2015</footer>
        </body>

        </html>

        <?php
    } else {
        header('Location: /loginM.html/'); //change link to redirect user
        ob_end_flush();
    }?>