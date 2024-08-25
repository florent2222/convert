<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Conversion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method="post">
        
        <div id="tete">
            <marquee> CONVERTIR LES DEGRES EN CELSIUS OU EN FAHRENHEIT</marquee>
     <input type="number" placeholder="Saississez la valeur à convertir" name="nombre" required="true">    
        &nbsp; &nbsp; <select name="temperature">
            <option value=0>Sélectionner</option>
            <option value=1>Celcius en Fahrenheit</option><br>
            <option value=2>Fahrenheit en Celcius</option>
        </select><br><br>
              
        <p><input type="submit" value="Convertir"></p>

             
        </div>
    </form>
</body>
    
</html>

<?php

echo '<div id="resultat">';
echo " = ";
if (!empty($_POST['temperature'])){

switch ($_POST['temperature']) {
   
    case 1:
        $nbr=$_POST['nombre'];
        $result= $nbr * 9 / 5 + 32; //calcul dégré C en F
        echo $result. " Fahrenheit";
        
        break;
    case 2:
        $nbr=$_POST['nombre'];
        $result=($nbr - 32) * 5 / 9; //conversion F en C
        echo $result. " Celcius";
        break;


}
  
} 
    echo "</div>";

?>