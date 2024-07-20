<?php
//< = menor
//> = maior
//>= maior igual
//== = igual
//!= = diferente
 //TOMADAS DE DECISÃO IF
 
 $idade = 26;
 $mediaIdade = 30;//COLOQUE A SEGUNDA PALAVRA EM MAIUSCULA
 $numero = 10;


//LAÇOS DE REPETIÇÃO

for ($i=0; $i <  5; $i++)//CONTADOR COMEÇANDO COM 0 ATÉ QUE ELE SEJA MENOR 5, ++ O VALOR DE 1 A CADA QUE ELA PASSAR NA LINHA DE CÓDIGO
{
echo '<p> o valor de i é'.$i;

}

//LAÇOS DE REPETIÇÃO

for ($i=0; $i <  $numero; $i++)//CONTADOR COMEÇANDO COM 0 ATÉ QUE ELE SEJA MENOR 5, ++ O VALOR DE 1 A CADA QUE ELA PASSAR NA LINHA DE CÓDIGO
{
   if($i == 3){//SE O CONTADOR É IGUAL A 3 EU QUERO QUE IMPRIMA 3
      echo '<p>Contador é 3<p>';
   }
echo '<br> o valor de i é'.$i;
}


 ?>