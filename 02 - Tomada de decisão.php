 <?php
 //TOMADAS DE DECISÃO IF
 
 $idade = 26;
 $mediaIdade = 30;//COLOQUE A SEGUNDA PALAVRA EM MAIUSCULA
 




 if($idade > $mediaIdade){
    echo '<p>Idade Maior que 30.'; //POSSO CONCATENAR .$mediaIdade.

 }
 else{
    echo '<p>Idade Menor que 30.';

 }



//ELSE IF
 if($idade > $mediaIdade){//IDADE MAIOR QUE 30
    echo '<p>Idade Maior que 30.'; //POSSO CONCATENAR .$mediaIdade.

 }
 else if($idade == 27){//IDADE É MAIOR QUE 27? '== comparação'. 
    echo '<p>Idade igual a 27anos.';
}
else{
    echo '<p> Idade não é maior que '.$mediaIdade.' e também não é igual a 27 anos.';// $idade sendo 26

}


 ?>