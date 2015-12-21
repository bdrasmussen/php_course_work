<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flickr Thumbnails</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/darkly/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<?php
    $xml = simplexml_load_file('https://api.flickr.com/services/feeds/photos_public.gne');
    $num_found = count($xml->entry);
    
    if ($num_found > 0) 
    {
        echo '<table cellpadding = 20><tr>';
        for ($i = 0; $i < 20; $i++) 
        {

            $entry = $xml->entry[$i];
            
            $title = $entry->title;
            
            $attrs = $entry->link->attributes();
            
            $url = $attrs['href'];
            $attrs = $entry->content;
            
            echo '<td style = "width:200px"><a href="' . $url . '">' . $title . '<img src="' . $attrs . '</a></td>';
            
            $newrow = ($i+1)/5;
            
            if ($newrow == 1 || $newrow == 2 || $newrow == 3 || $newrow == 4)
            {
                ?>
                <tr></tr>
                <?php
            }

        }
    echo '</tr></table>';
    }
    else 
    {
        echo '<p>Sorry, nothing was found</p>';
    }

?>