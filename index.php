<?php 

$x = rand(1, 10);
$text = '';
for ($z = 1; $z <= $x; $z++) {
    $text .= "Tai yra $z-tasis ciklas<br>";
}    
?>
<html>
    <head>
        <title>main</title>
    </head>
    <body>
        <P>
           <?php print $text;?>
        </P>
    </body>
</html>

