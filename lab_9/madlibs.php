<?php
    require_once('connectvars.php');
class Madlib
{
  private $noun;
  private $verb;
  private $adjective;
  private $adverb;
  private $story;
  
  function __construct($n,$v,$adj,$ad)
  {
    $this->noun = $n;
    $this->verb = $v;
    $this->adjective = $adj;
    $this->adverb = $ad;
    $this->story = 'Do you ' . $this->verb . ' your ' . $this->adjective . ' ' . $this->noun . ' ' . $this->adverb . "? How hilarious!";
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        or die('Error connecting to MySQL server.');
    $query = "insert into Madlibs(Story, Noun, Verb, Adjective, Adverb) values ('$this->story', '$this->noun', '$this->verb', '$this->adjective', '$this->adverb');";
    
    mysqli_query($dbc, $query)
        or die('Error querying database.');
  }
  
  public function output()
  {
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        or die('Error connecting to MySQL server.');
    $query = 'select story from Madlibs order by id desc;';
    $result = mysqli_query($dbc, $query);

    while ($row = mysqli_fetch_array($result)) 
    {
        echo $row['story'];
        echo '<br />';
    }
 
  }

}
?>