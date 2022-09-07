<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $saludo="hola mundo!!";
        echo $saludo;

        $num1=10;
        $num2=5;

        /* suma */
        echo "<br>";
        echo $num1+$num2;
    
        /* resta */
        echo "<br>";
        echo $num1-$num2;

        /* multiplicacion */
        echo "<br>";
        echo $num1*$num2;

        /* division */
        echo "<br>";
        echo $num1/$num2;



        /*  Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por 
        pantalla.
        */

        /* 1 C°==33.8 F° */

        echo "<br>";
        $centigrados = 20;
        $fahrenheit = 33.8;

        $total = $centigrados * $fahrenheit;
        echo "20°C son $total °F";


        /*Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.
        */

        echo "<br>";
        $base = 18;
        $altura=12;
        $perimetroRectangulo = ($base*2)+($altura*2);
        echo $perimetroRectangulo;

        echo "<br>";
        $area = $base*$altura;
        echo $area;


        /* Calcular el perímetro y el área de un círculo dado que su radio es de 30cm */
      
        echo "<br>";
        $pi = 3.14;
        $radio = 30;
        $perimetroCirculo = (2*$pi)*$radio;
        echo $perimetroCirculo;

        echo "<br>";
        $area = $pi*($radio*$radio);
        echo $area;

    ?>
</body>
</html>

