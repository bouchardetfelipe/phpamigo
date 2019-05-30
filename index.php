<?php

$pessoa = [
  "nome" => "Jon",
  "sobrenome" => "Snow",
  "idade" => 27,
  "passatempo" => ["Netflix", "Futebol", "Música"]
];
//
// echo "<pre>";
// var_dump($pessoa);
//
//
// echo "========";

$pessoa['idade'] = 25;
//
//
// echo "<pre>";
// var_dump($pessoa);
//
// echo "========";

$pessoa["endereço"] = "Winterfell";
//
// echo "<pre>";
// echo var_dump($pessoa);
//
// echo "========";

$pessoa["Passatempo"][] = "Programação";
// echo "<pre>";
// var_dump($pessoa);

echo "Condicionais<br>";

$a = 42;
$b = 27;

if($a > $b) {
  echo "O maior número é $a<br>";
} else {
  echo "O maior número é $b<br>";
}

echo "<br>Exercício 2: <br>";

$numeroAleatorio = rand(1, 5);

if($numeroAleatorio == 3 || $numeroAleatorio == 5) {
    echo "Número da sorte!";
} else {
  echo "Não é número da sorte :(";
}

if($numeroAleatorio != 3) {
  echo "<br>O número não é 3!";
} else {
  echo "<br> $numeroAleatorio <br>";
}

$numeroAleatorio = rand(1, 100);


if($numeroAleatorio >=50) {
  echo "<br>O número da vez é $numeroAleatorio<br>";
} else {
  echo "<br>O número da vez é menor que 50<br>";
}

echo "<br> ---------- LOGIN -----------<br>";

$usuario = "admin";
$senha = "123";

if($usuario == "admin" && $senha == "123") {
  echo "<br>Bem Vindo!<br>";
} else {
  echo "<br>Error!";
}


$number = rand(1, 10); //define numero aleatorio de 1 a 10
echo ($number % 2 == 0) ? "O número é par!" : "O número é impar!";

//
// if ($number % 2 == 0) {
//   echo "O número é par!";
// } else {
//   echo "O número é ímpar!";
// }


switch ($nota) {
  case 1:
  echo "Aluno reprovado, eita!";
  break;
  case 2:
  echo "Aluno reprovado, poderia ter se esforçado mais!";
  break;
  case 3:
  echo "Aluno reprovado!";
  break;
  case 4:
  echo "Na risca";
  break;
  case 5:
  echo "Aluno reprovado, eita!";
  break;
  case 6:
  echo "Aluno reprovado, eita!";
  break;
  case 7:
  echo "Aluno reprovado, eita!";
  break;
  case 8:
  echo "Aluno reprovado, eita!";
  break;
  case 9:
  echo "Aluno reprovado, eita!";
  break;
  case 10:
  echo "Aluno reprovado, eita!";
  break;
  }



echo "<br> --------------- LOOP ------------------<br>";

echo "Exercício 1:";

for ($i = 1; $i<= 10; $i++) {
    echo "2 x $i = ". (2 * $i) . "<br>";
}


$num = 100;

while ($num > 85) {
  echo "$num <br>";
  $num--;
}

$counter = 1;

while ($counter <= 5) {
  echo $counter * 2 . "<br>";
  $counter++;
}



$cara = 0;
$jogadas = 0;

while ($cara <= 5) {
  $moeda = rand(0,1);
  echo "<br> moeda: $moeda";
  if($moeda == 1) {
    $cara++;
  } else {
    $cara = 0;
  }

  $jogadas++;

}

echo "foram $jogadas jogadas";



echo "Exercício 5<br>";
$nomes=["João", "Maria", "Pedro", "Jussara", "Carlos"];
for($i=0;$i<count($nomes);$i++) {
  echo $nomes[$i] . "<br>";
}

echo "<br>Usando o for<br>";
$a=0;
while(count($nomes)>$a){
  echo $nomes [$a] . "<br>";
  $a++;
 }








 ?>
