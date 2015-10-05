<?php


    $noun = $_POST['noun'];
    $verb = $_POST['verb'];
    $adj = $_POST['adj'];
    $adverb = $_POST['adverb'];
    $output_form = false;
    $dbc = mysqli_connect('localhost', 'bdrasmussen', 'root', 'manlibs')
     or die('Error connecting to MySQL server.');
 
if (isset($_POST['submit']))
{
  if (empty($noun) && empty($verb) && empty($adj) && empty($adverb))
  {
   echo 'All of your fields are empty, please fill in all fields. <br />';
   $output_form = true;
  }
  
  else if (empty($noun))
  {
    echo 'Fill in the noun field';
    $output_form = true;
  }
  else if (empty($verb))
  {
    echo 'Fill in the verb field';
    $output_form = true;
  }
  else if (empty($adj))
  {
    echo 'Fill in the adjective field';
    $output_form = true;
  }
  else if (empty($adverb))
  {
    echo 'Fill in the adverb field';
    $output_form = true;
  }
  
}
else
{
  $output_form = true;
}
  if((!empty($noun)) && (!empty($verb)) && (!empty($adj)) && (!empty($adverb)))
  {

    $query2 = mysqli_query($dbc, "Select * from madlibs");
    $rowcount = mysqli_num_rows($query2) + 1;
    
    $query = "insert into madlibs(madlib_sk, noun, verb, adj, adverb) values ('$rowcount','$noun', '$verb', '$adj', '$adverb');";
    
    mysqli_query($dbc, $query)
      or die('Error querying database.');
    $output_form = true;
   
    $query1 = "select * from madlibs order by madlib_sk desc;";
    $result = mysqli_query($dbc, $query1);

    while ($row = mysqli_fetch_array($result)) 
    {
      echo 'Do you ' . $row['verb'] . ' your ' . $row['adj'] . ' ' . $row['noun'] . ' ' . $row['adverb'] . "? That's hilarious!";
      echo '<br />';      
    }
  }  
if ($output_form)
{
?>
<body>

  <p><font size ="3" color="red">Play Mad-libs!</font></p>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="noun">Enter a noun: </label>
    <input type="text" id="noun" name="noun" value = "<?php echo $noun; ?>" /><br />
    <label for="verb">Enter a verb: </label>
    <input type="text" id="verb" name="verb" value = "<?php echo $verb; ?>"/><br />
    <label for="adj">Enter an adjective: </label>
    <input type="text" id="adj" name="adj" value = "<?php echo $adj; ?>"/><br />
    <label for="adverb">Enter an adverb: </label>
    <input type="text" id ="adverb" name= "adverb" value = "<?php echo $adverb; ?>"/><br />
    <input type="submit" name="submit" value="Submit" />
    
  </form>
<?php
}


  mysqli_close($dbc);
  
    
?>


</body>
</html>