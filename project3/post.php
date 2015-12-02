<?php
    require_once('connectvars.php');

    if (isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $entry = $_POST['entry'];
        $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
            or die('Error connecting to MySQL server.');
        $query = "insert into blogentries(username, public, entry, date) values ('$username', 0, '$entry', NOW());";
            
        mysqli_query($dbc, $query)
            or die('Error querying database.');
        
    }
?>

<html>
    <head>
        <title>IU Webmaster redirect</title>
        <META http-equiv="refresh" content="3;project3.php">
    </head>
        <body bgcolor="#ffffff">
            <center>Your post entered correctly
        </body>
</html>
