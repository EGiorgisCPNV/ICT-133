<html>
<body>

<?php

$value=20;
$step=3;
$i=0;


while($i<10){
    if($value>=30){
        print_r("La valeur vaut $value <br>");

    }
    else
    {
        print_r("nombre trop petit <br>");
    }

    $value+=$step;
    $i++;
}
?>

</body>
</html>



