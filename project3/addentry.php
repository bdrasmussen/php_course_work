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
             <form class="form-horizontal" action="post.php" method="post" role="form">
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
                                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                </fieldset>
            </form>
        </div>
    </div>
</body>