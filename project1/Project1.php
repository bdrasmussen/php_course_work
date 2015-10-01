<?php

if (isset($_POST['submit']))
{

    $noun = $_POST['noun'];
    $verb = $_POST['verb'];
    $adj = $_POST['adj'];
    $adverb = $_POST['adverb'];
    $output_form = false;

    $dbc = mysqli_connect('localhost', 'bdrasmussen', 'root', 'manlibs')
     or die('Error connecting to MySQL server.');
  


  if (empty($noun) && empty($verb) && empty($adj) && empty($adverb))
  {
   echo 'Fill in a field <br />';
   $output_form = true;
  }
  
}
else
{
  $output_form = true;
}
    

  if((!empty($noun)) && (!empty($verb)) && (!empty($adj)) && (!empty($adverb)))
  {
    $query = "INSERT INTO madlibs (noun, verb, adj, adverb)  VALUES ('$noun', '$verb', '$adj', '$adverb')";
    mysqli_query($dbc, $query)
      or die('Error querying database.');
    $output_form = true;
  } 
    $query1 = "SELECT * FROM madlibs";
    $result = mysqli_query($dbc, $query1);
    while ($row = mysqli_fetch_array($result)) 
    {
      echo 'Do you ' . $row['verb'] . ' your ' . $row['adj'] . ' ' . $row['noun'] . ' ' . $row['adverb'] . "? That's hilarious!";
      echo '<br />';
    }

  mysqli_close($dbc);
  
   if ($output_form)
  {
?>
<body>

  <p>Play Mad-libs!</p>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="noun">Enter a noun: </label>
    <input type="text" id="noun" name="noun" /><br />
    <label for="verb">Enter a verb: </label>
    <input type="text" id="verb" name="verb" /><br />
    <label for="adj">Enter an adjective: </label>
    <input type="text" id="adj" name="adj" /><br />
    <label for="adverb">Enter an adverb: </label>
    <input type="text" id ="adverb" name= "adverb" /><br />
    <input type="submit" name="submit" value="Submit" />
    
  </form>
<?php
  }
?>


</body>
</html>