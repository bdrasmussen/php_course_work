<?php
    require_once('connectvars.php');
    
    $id = $_GET['id'];
        
    echo $id;
        
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        or die('Error connecting to MySQL server.');
    $query = "DELETE FROM blogentries WHERE id = $id LIMIT 1";
        
    mysqli_query($dbc, $query)
        or die('Error querying database.');
        
?>

<html>
    <head>
        <title>IU Webmaster redirect</title>
        <META http-equiv="refresh" content="2;admin.php">
    </head>
        <body bgcolor="#ffffff">
            <center>Post removed
        </body>
</html>