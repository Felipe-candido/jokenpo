<?php

class maquina{
    private $numero;

    public function get_numero(){
        $this->numero = rand(1,5);
        return $this->numero;
    }
}

$numero1 = $_POST['numero'];
switch ($numero1) {
    case '1':
        $numero1 = "pedra";
        break;
    
    case '2':
        $numero1 = "papel";
        break;

    case '3':
        $numero1 = "tesoura";
        break;

    case '4':
        $numero1 = "lagarto";
        break;

    case '5':
        $numero1 = "spock";
        break;
    
    default:
    break;
}

$maquina = new maquina;
$numero2 = $maquina->get_numero();
switch ($numero2) {
    case '1':
        $numero2 = "pedra";
        break;
    
    case '2':
        $numero2 = "papel";
        break;

    case '3':
        $numero2 = "tesoura";
        break;

    case '4':
        $numero2 = "lagarto";
        break;

    case '5':
        $numero2 = "spock";
        break;
    
    default:
    break;
}




echo "voce escolheu: " . $numero1 . "<br>";
echo "A maquina escolheu: " . $numero2 . "<br>";


$regras = [
    'pedra' => $pedra = ['tesoura', 'lagarto'],
    'papel' => $papel = ['pedra', 'spock'],
    'tesoura' => $tesoura = ['papel', 'tesoura'],
    'lagarto' => $lagarto = ['papel', 'spock'],
    'spock' => $spock = ['tesoura', 'pedra'],

];


if ($numero1 == $numero2) {
    echo "EMPATOU!";
}

else if (in_array($numero2, $regras[$numero1])){
    echo "VOCE GANHOU!";
}
else {
    echo "VOCE PERDEU!";
}




// if ($numero1 == $numero2){
//     echo "EMPATOU!";
// }

// if ($numero1 == "pedra" && $numero2 == "tesoura"){
//     echo "VOCE GANHOU!";
// }

// if ($numero1 == "pedra" && $numero2 == "papel"){
//     echo "VOCE PERDEU!";
// }

// if ($numero1 == "pedra" && $numero2 == "lagarto"){
//     echo "VOCE GANHOU!";
// }

// if ($numero1 == "pedra" && $numero2 == "spock"){
//     echo "VOCE PERDEU!";
// }

// if ($numero1 == "papel" && $numero2 == "tesoura"){
//     echo "VOCE PERDEU!";
// }

// if ($numero1 == "papel" && $numero2 == "pedra"){
//     echo "VOCE GANHOU!";
// }

// if ($numero1 == "papel" && $numero2 == "lagarto"){
//     echo "VOCE PERDEU!";
// }

// if ($numero1 == "papel" && $numero2 == "spock"){
//     echo "VOCE GANHOU!";
// }

// if ($numero1 == "tesoura" && $numero2 == "pedra"){
//     echo "VOCE PERDEU!";
// }

// if ($numero1 == "tesoura" && $numero2 == "papel"){
//     echo "VOCE GANHOU!";
// }

// if ($numero1 == "tesoura" && $numero2 == "lagarto"){
//     echo "VOCE GANHOU!";
// }

// if ($numero1 == "tesoura" && $numero2 == "spock"){
//     echo "VOCE PERDEU!";
// }

// if ($numero1 == "lagarto" && $numero2 == "papel"){
//     echo "VOCE GANHOU!";
// }

// if ($numero1 == "lagarto" && $numero2 == "spock"){
//     echo "VOCE GANHOU!";
// }

// if ($numero1 == "lagarto" && $numero2 == "pedra"){
//     echo "VOCE PERDEU!";
// }

// if ($numero1 == "lagarto" && $numero2 == "tesoura"){
//     echo "VOCE PERDEU!";
// }

// if ($numero1 == "spock" && $numero2 == "papel"){
//     echo "VOCE PERDEU!";
// }

// if ($numero1 == "spock" && $numero2 == "lagarto"){
//     echo "VOCE PERDEU!";
// }

// if ($numero1 == "spock" && $numero2 == "tesoura"){
//     echo "VOCE GANHOU!";
// }

// if ($numero1 == "spock" && $numero2 == "pedra"){
//     echo "VOCE GANHOU!";
// }