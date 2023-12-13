



<?php
echo "¡HOLA MUNDO!";
echo "<br>";
print("Nuevamente ¡HOLA MUNDO!");

   //*  1. Haga un programa que calcule el promedio de notas sabiendo que tienen un valor de 30%,
      //  30% y 40% respectivamente *//

     $NOTA1=4.0;
     $NOTA2=3.0;
     $NOTA3=3.8;
     $Resultado=($NOTA1*30)/100 + ($NOTA2*30)/100 + ($NOTA3*40)/100;
     echo "<br> <br>";
     echo ("ELRESULTADO ES: ".$Resultado);

     /* 1.) Haga un programa que calcule el promedio de notas sabiendo que tienen un valor de 30%,
     30% y 40% respectivamente.
     2.) Un programa que al capturar la edad de una persona diga si es:
      Menor de edad (Menor a 18 años)
      Adulto (Mayor o igual a 18 años y menor a 60 años)
      Adulto mayor (Mayor o igual a 60 años)
      Adicionalmente si la persona es mayor o igual a 18 años.*/
     echo "<br> <br>";
    $edad=62;
    if ($edad<18){
        print("LA persona es menor de edad");
    }
else if($edad<60){
    print("la persona es adulto");
}
else {
    print("la persona es adulto MAYOR");
}

/*Desarrollar un programa que determine los divisores de un número def inido previamente.*/
  
  $Numero=8.0;
  echo "Divisores del número".$Numero.":  ";
  for ($i=1;$i<=$Numero;$i++){
    $Residuo=$Numero % $i;
    if($Residuo==0)
    {
        echo "[ ".$i." ] ";
    }
  }
  echo "<br> <br>";

  ?>



