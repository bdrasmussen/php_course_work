<?php
   

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
        
       if (!empty($recyclable))
        {
            $electronic = new Electronics();
            $electronic->setRecyclable($recyclable);
            $electronic->setTitle($title);
            $electronic->setPrice($price);
            $electronic->setDescription($description);
            
            $electronic->addDatabase();
            
        }
        
        elseif (!empty($shipping))
        {
            $tool = new Tools();
            $tool->setTitle($title);
            $tool->setDescription($description);
            $tool->setPrice($price);
            $tool->setShipper($shipping);
            $tool->setWeight($weight);
            
            $tool->addDatabase();            
        }
        
        else 
        { 
            $product = new Product();
            $product->setDescription($description);
            $product->setTitle($title);
            $product->setPrice($price);

            
            $product->addDatabase();
        }
    }
    

?>