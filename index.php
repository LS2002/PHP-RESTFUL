<?php
$delete = $_GET["del"];
if($delete == 'yes' && file_exists("test.html"))
    unlink("test.html");

$content = $_GET["content"]; 

if($content != "")
    file_put_contents("test.html", $content."\n", FILE_APPEND);


header("Content-type:text/html");
echo file_get_contents("test.html"); 
?>
