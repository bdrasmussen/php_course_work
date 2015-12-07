<?php
    require_once('connectvars.php');
    
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        or die('Error connecting to MySQL server.');
?>

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
                            <label for="type" class="col-lg-1 control-label">Blog entries:</label>
                            <div class="col-lg-5">
                            <?php

                                $query1 = "select * from blogentries order by id desc;";
                                $result = mysqli_query($dbc, $query1);
                            
                                while ($row = mysqli_fetch_array($result)) 
                                {
                                    echo '<div class = "col-lg-10">Posted by: '. $row['username'] . ' on ' . $row['date'] . "</div>";
                                    echo '<br />';
                                    echo '<h3>' . $row['entry'] . '</h3>';
                                    echo '<br />';
                                }
                            
                            ?>        
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-1">
                                <button type="submit" name="blog" value="blog" class="btn btn-primary">Create a Blog Entry</button>
                                <button type="submit" name="admin" value="admin" class="btn btn-primary">Admin Page</button>
                            </div>
                        </div>
                </fieldset>
            </form>
        </div>
    </div>
</body>

<?php
    
    if (isset($_POST['blog']))
    {
        
        ?>
        
            <html>
                <head>
                    <title>IU Webmaster redirect</title>
                    <META http-equiv="refresh" content="0;addentry.php">
                </head>
            </html>
        <?php
        
    }

    if (isset($_POST['admin']))
    {
        ?>
        
            <html>
                <head>
                    <title>IU Webmaster redirect</title>
                    <META http-equiv="refresh" content="0;admin.php">
                </head>
            </html>
        <?php
        
    }    
    
    
?>