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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="https://gist.githubusercontent.com/johnsonch/d676338c09b58ab27675/raw/0fde8550ab8ea5e3db6f3ebf76cad873c5e95dd7/blogpost.css" rel="stylesheet">

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
            
            <?php
                if (isset($_POST['submit']))
                {
                    $selection = $_POST['type'];
                    
                    if ($selection == 'Post')
                    {
                        
                    }
                    
                    elseif ($selection == 'View')
                    {
                        
                    }
                    
                    elseif ($selection == 'Delete')
                    {
                        
                    }
                    
                
                }
                else
                {
                    ?>
                         <form class="form-horizontal" action="<?= $_SERVER['PHP_SELF'] ?>" method="post" role="form">
                            <fieldset>
                                <legend>Ben's Blog</legend>                   
                                <div class="form-group">
                                    <label for="type" class="col-lg-2 control-label">Choose an action:</label>
                                    <div class="col-lg-10">
                                        <form action="">
                                            <input type="radio" name="type" value="Post">Post a New Blog Entry<br>
                                            <input type="radio" name="type" value="View">View Current Blog Posts<br>
                                            <input type="radio" name="type" value="Delete">Delete an Existing Post
                                        </form>
                                    </div>
                                </div>
                                        
                            
                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    <?php
                }
            
            ?>
            
        </div>
    </div>
</body>