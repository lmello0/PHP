<?php

function exercicio1(){

    $num = $_GET ["num"];

    if($num %2==0){
        echo "O número é par";
    } else {
        echo "O número é ímpar";
    }
    if($num > 0){
        echo "<br>O número é positivo";
    } else {
        echo "<br>O número é negativo";
    }
}

function exercicio2(){

    $sexoM = $_GET ["sexo"] == "M";
    $sexoF = $_GET ["sexo"] == "F";
    $altura = $_GET ["altura"];
    $pesoi = 0;

    if($sexo = "M"){
        $pesoi = (72.7*$altura)-58;
        echo "$pesoi Kg<br>";
    } else if($sexo = "F"){
        $pesoi = (62.1*$altura)-44.7;
        echo "$pesoi Kg<br>";
    }

}

function exercicio3(){

    $numero = $_GET ["num"];

    for ($i = 0; $i <= $numero; $i++){
        if($i %2==0){
            echo "$i <br>";
        }
        
    }
}

function exercicio4(){

    $idade = $_GET ["idade"];
    
    if($idade >=5&$idade<=7){
        echo "O nadador é Infantil A";
    }
    if($idade >=8&$idade<=10){
        echo "O nadador é Infantil B";
    }
    if($idade >=11&$idade<=13){
        echo "O nadador é Juvenil A";
    }
    if($idade>=14&$idade<=17){
        echo "O nadador é Juvenil B";
    }
    if($idade>=18){
        echo "O nadador é adulto";
    }
}

exercicio4()

?>