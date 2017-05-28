<!DOCTYPE html>
<html>
<head>
<title>BOOKMARKS VIEWER PHP (DEMO) </title>
</head>
<body>



-- BOOKMARKS VIEWER PHP --<br>
<?php echo "The time is " . date("h:i:sa") . " and today is " . date("Y/m/d") . "<br>"; 
echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
echo "<br>";
?>
<hr/>


<?php
// Check if file already exists
if (file_exists("bookmarks.asc")) 
{
 // echo "Yes, the file exists.<br>";
}
else 
{
  echo "No, the file does not exist.<br>";
 $myfile = fopen("bookmarks.asc", "w") or die("Unable to open file!");
 fwrite($myfile, "Hello World\n");
 fwrite($myfile, "This is a test of ascii file\n");
 $txt = "John Doe\n";
 fwrite($myfile, $txt);
 $txt = "Jane Doe\n";
 fwrite($myfile, $txt);
 fclose($myfile);
}
?>




 


<?php
// VISUAL
if (! file_exists("bookmarks.asc"))
{
  echo "File database.asc Not Found <br>" ;
}
else
{

if (!empty($_POST))
if (!empty($_POST["postchat"]))
if ( $_POST["postchat"] == "clear" )
{
  $myfile = fopen("bookmarks.asc", "wb") or die("Unable to open file!");
  fwrite($myfile, "" );
  //fwrite($myfile, $_POST["postchat"] );
  fwrite($myfile, "\n" );
  fclose($myfile);
  echo "**new** <br> " ;
}



//echo "visual <br> \n";
//echo "File bookmarks.asc Found:<br>" ;
$handle = fopen("bookmarks.asc", "r");
//echo "<a href=\"http://www.google.com\">Clickable text for Google </a> <br>";
//echo "<br>";
echo "<br>";
if ( $_POST["postchat"] != "clear" )
if ($handle) {
    while (($line = fgets($handle)) !== false) 
    {
      if ( $line != "\n" ) 
      if ( $line != "clear" ) 
      if ( $line != "clear\n" ) 
      if ( $line != "" ) 
      {
        // process the line read.
        echo "- <a href=\"" ;
        echo $line ;
        echo "\"";
        echo ">";
        echo "Link" ;
        echo "</a>";
        echo " (";
        echo $line ;
        echo ")" ;
        echo "<br>";
      }
    }
    // <a href="https://www.w3schools.com">Visit W3Schools</a>
    fclose($handle);
} else {
    // error opening the file.
} 
}
?>
<hr>
<br>

 


 



<?php
if (!empty($_POST))
if (!empty($_POST["postchat"]))
{
  $myfile = fopen("bookmarks.asc", "ab") or die("Unable to open file!");
  fwrite($myfile, $_POST["postchat"] );
  fwrite($myfile, "\n" );
  fclose($myfile);
}
?>
<?php if (!empty($_POST)): ?>
    Your chat input line (post) is: <?php echo htmlspecialchars($_POST["postchat"]); ?>.<br>
<?php else: ?>
    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
        Your bookmark msg (post): <input type="text" name="postchat"><br>
        <input type="submit">
    </form>
<?php endif; ?>
<hr>
<br>


 

<input type=button 
value="Button Home Index"
onClick="self.location='bookmarks.php'">



<!--
-Refresh 5secs-<br>
<meta http-equiv="refresh" content="5" />  
-->

</body>
</html>

