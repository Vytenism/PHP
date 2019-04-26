<?php
function amzius($amzius){
 
    if($amzius<0){
        return 'Klaida';
    }
    if($amzius<18){
        return 'nepilnametis';
    }
    if($amzius<65){
        return 'pilnametis';
    }
    return 'pensinikas';
}

print amzius(65)
?>

<!--<html>
    <head>
        <title>array</title>
    </head>
    <body>
        <div class="produktas">
            <span class="pavadinimas">
                <?php print $arr['grietine']['name'];?>
            </span>
            <span class="kiekis">
                 <?php print $arr['grietine']['amount'];?>
            </span>
            <span class="dydis">
                 <?php print $arr['grietine']['size'];?>
            </span>
        </div>   
    </body>
</html>-->
