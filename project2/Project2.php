<body>

    <p><font size ="5" color="blue">Body Mass Index Calculator</font></p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="weight"><font face ="verdana" size ="4" color="green">Enter your weight in pounds: </font></label>
        <input type="text" id="weight" name="weight" value = "<?php echo $weight; ?>" /><br />
        <label for="height"><font face ="verdana" size ="4" color="green">Enter your height in inches: </font></label>
        <input type="text" id="height" name="height" value = "<?php echo $height; ?>" /><br />

        <input type="submit" name="submit" value="Submit" />
    
    </form>

</body>

<?php

    $weight = $_POST['weight'];
    $height = $_POST['height'];

if (isset($_POST['submit']))
{
    if (empty($weight) && empty($height))
    {
        echo '<font size ="4" color="red">All of your fields are empty, please fill in all fields. </font><br />';
    }
  
    else if (empty($weight))
    {
        echo '<font size ="4" color="red">Fill in the weight</font>';
    }
    else if (empty($height))
    {
        echo '<font size ="4" color="red">Fill in the height</font>';
    }
    else if (!is_numeric($height))
    {
        echo '<font size ="4" color="red">Height must be a number in inches</font>';
    }
    else if (!is_numeric($weight))
    {
        echo '<font size ="4" color="red">Weight must be a number in pounds</font>';
    }
    else if (($weight <= 0) || ($height <= 0))
    {
        echo '<font size ="4" color="red">Please enter a value greater than zero</font>';
    }
    else
    {
        $BMI = round((($weight / ($height * $height)) * 703), 2);
        echo '<font size ="4" color = "purple">Your BMI is ' . $BMI . '</font><br />';
        if ($BMI < 18.5)
        {
            echo '<font size ="4" color = "red">You are underweight. You should see your doctor.</font>';
        }
        else if ($BMI > 25)
        {
            echo '<font size ="4" color = "red">You are overweight. You should see your doctor.</font>';
        }
        else
        {
            echo '<font size ="4" color = "green">You are in the correct weight range.</font>'; 
        }
    }
}
?>