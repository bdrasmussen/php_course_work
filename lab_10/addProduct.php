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
                    $type = $_POST['type'];
                    
                    if ($type == 'Products' )
                    {
                        ?>
                            <form class="form-horizontal" action="commit.php" method="post" role="form">
                                <fieldset>
                                    <legend>Add Product</legend>
                                    <div class="form-group">
                                        <label for="title" class="col-lg-2 control-label">Title:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="title" id="title" >
                                            </div>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="description" class="col-lg-2 control-label">Description:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="description" id="description" >
                                            </div>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="price" class="col-lg-2 control-label">Price:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="price" id="price" >
                                            </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <button type="submit" name="commit" value="commit" class="btn btn-primary">Commit to Database</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        <?php
                        
                    }
                    
                    elseif ($type == 'Tools')
                    {
                        ?>
                            <form class="form-horizontal" action="commit.php" method="post" role="form">
                                <fieldset>                        
                                    <legend>Add Tool</legend>
                                    <div class="form-group">
                                        <label for="title" class="col-lg-2 control-label">Title:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="title" id="title" >
                                            </div>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="description" class="col-lg-2 control-label">Description:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="description" id="description" >
                                            </div>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="price" class="col-lg-2 control-label">Price:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="price" id="price" >
                                            </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="shipping" class="col-lg-2 control-label">Choose shipping type:</label>
                                        <div class ="col-lg-10">
                                            <form action="">
                                                <input type="radio" name="shipping" value="USPS">USPS<br>
                                                <input type="radio" name="shipping" value="UPS">UPS<br>
                                                <input type="radio" name="shipping" value="FedEX">FedEX
                                            </form>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="weight" class="col-lg-2 control-label">Weight:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="weight" id="weight" >
                                            </div>
                                    </div>                            
                                    
                                    <div class="form-group">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <button type="submit" name="commit" value="commit" class="btn btn-primary">Commit to Database</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        <?php  
                    }
                    
                    elseif ($type == 'Electronics')
                    {
                        ?>
                            <form class="form-horizontal" action="commit.php" method="post" role="form">
                                <fieldset>
                                    <legend>Add Electronic</legend>
                                    <div class="form-group">
                                        <label for="title" class="col-lg-2 control-label">Title:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="title" id="title" >
                                            </div>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="description" class="col-lg-2 control-label">Description:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="description" id="description" >
                                            </div>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="price" class="col-lg-2 control-label">Price:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="price" id="price" >
                                            </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="shipping" class="col-lg-2 control-label">Choose shipping type:</label>
                                        <div class ="col-lg-10">
                                            <form action="">
                                                <input type="radio" name="shipping" value="USPS">USPS<br>
                                                <input type="radio" name="shipping" value="UPS">UPS<br>
                                                <input type="radio" name="shipping" value="FedEX">FedEX
                                            </form>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="weight" class="col-lg-2 control-label">Weight:</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="weight" id="weight" >
                                            </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="recyclable" class="col-lg-2 control-label">Recyclable?:</label>
                                        <div class ="col-lg-10">
                                            <form action="">
                                                <input type="radio" name="recyclable" value="Yes">Yes<br>
                                                <input type="radio" name="recyclable" value="No">No
                                            </form>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <button type="submit" name="commit" value="commit" class="btn btn-primary">Commit to Database</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        <?php                         
                    }
                    
                    else
                    {
                        ?>
                             <form class="form-horizontal" action="<?= $_SERVER['PHP_SELF'] ?>" method="post" role="form">
                                <fieldset>
                                    <legend>Item Add Form</legend>                   
                                    <div class="form-group">
                                        <label for="type" class="col-lg-2 control-label">Choose the type of object you wish to enter:</label>
                                        <div class="col-lg-10">
                                            <form action="">
                                                <input type="radio" name="type" value="Electronics">Electronics<br>
                                                <input type="radio" name="type" value="Tools">Tools<br>
                                                <input type="radio" name="type" value="Products">Products
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
                }
                
                else
                {
                    ?>
                         <form class="form-horizontal" action="<?= $_SERVER['PHP_SELF'] ?>" method="post" role="form">
                            <fieldset>
                                <legend>Item Add Form</legend>                   
                                <div class="form-group">
                                    <label for="type" class="col-lg-2 control-label">Choose the type of object you wish to enter:</label>
                                    <div class="col-lg-10">
                                        <form action="">
                                            <input type="radio" name="type" value="Electronics">Electronics<br>
                                            <input type="radio" name="type" value="Tools">Tools<br>
                                            <input type="radio" name="type" value="Products">Products
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