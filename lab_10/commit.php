<?php
   
    require_once('connectvars.php');
    require_once('product.php');
    require_once('tools.php');
    require_once('electronics.php'); 
   
    if (isset($_POST['commit']))
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $shipping =  $_POST['shipping'];
        $weight = $_POST['weight'];
        $recyclable = $_POST['recyclable'];
        
        echo $recyclable;
        echo '<br>';
        
        if (empty($recyclable))
        {
            $electronic = new Electronics();
            $electronic->setRecyclable($recyclable);
            $electronic->setWeight($weight);
            $electronic->setShipping($shipping);
            $electronic->setTitle($title);
            $electronic->setPrice($price);
            $electronic->setDescription($description);
            
            echo $shipping;
            
        }
        
        echo $title;
        echo $description;
        echo $price;
        echo $shipping;
        echo $weight;
        echo $recyclable;
    }
    

?>