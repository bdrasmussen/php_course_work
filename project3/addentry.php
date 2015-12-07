<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/darkly/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    
    <div class="container">
        <div class="row">
             <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="form">
                <fieldset>
                    <legend>Ben's Blog</legend>                   
                        <div class="form-group">
                            <label for="entry" class="col-lg-2 control-label">Entry:</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="entry" id="entry" cols = "40" rows ="20"></textarea>
                                </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="username" class="col-lg-2 control-label">Username:</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" name="username" id="username" >
                                </div>
                        </div>                        
                        
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" name="postentry" value="postentry" class="btn btn-primary">Post Entry</button>
                                <button type="submit" name="back" value="back" class="btn btn-primary">Back to Home</button>
                            </div>
                        </div>
                </fieldset>
            </form>
        </div>
    </div>
</body>

<?php
    require_once('connectvars.php');   
    if (isset($_POST['postentry']))
    {
        $username = $_POST['username'];
        $entry = $_POST['entry'];
        $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
            or die('Error connecting to MySQL server.');
        $query = "insert into blogentries(username, public, entry, date) values ('$username', 0, '$entry', NOW());";
            
        mysqli_query($dbc, $query)
            or die('Error querying database.');
        ?>
    
        <html>
            <head>
                <title>IU Webmaster redirect</title>
                <META http-equiv="refresh" content="1;project3.php">
            </head>
                <body bgcolor="#ffffff">
                    <center>Your post entered correctly
                </body>
        </html>
        <?php
    }
    if (isset($_POST['back']))
    {
        ?>
        
            <html>
                <head>
                    <title>IU Webmaster redirect</title>
                    <META http-equiv="refresh" content="0;project3.php">
                </head>
            </html>
        <?php
        
    }    
    
    
    
?>