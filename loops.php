<?php
// Utilizando um for, imprimir os números de 1 a 100.
for ($i=0; $i<=100; $i++) {
    echo $i . '<br>';
}                                           /* quebra de linha */ echo '<br>';
/* Modificar o exercício anterior para que, em vez de parar no número 100, pare
em um número gerado aleatoriamente entre 0 e 100. */
for ($i=0;$i<=mt_rand(0,100);$i++) {
    echo $i . '<br>';
}                                          /* quebra de linha */ echo '<br>';
// Mostrar a tabela de multiplicação do 2 utilizando um for.
for ($i=0;$i<=100;$i++) {
    if ($i%2==0) {
    echo $i . '<br>';
    } 
}                                           /* quebra de linha */ echo '<br>';
/* Utilizando um while, fazer um programa que lance uma moeda (escolhendo
um número aleatório que pode ser 0 ou 1) até tirar 5 vezes cara (o número 1).
Ao terminar, imprimir o número de lançamentos da moeda até tirar 5 vezes
cara. */
$a = 0;
while ($a < 5) {
    $heads = 0;
    $throws = mt_rand(0, 1);
    $numberOfThrows = 0;
    if ($throws == 1) {
        $a++;
    }
    echo $throws;
}                                      /* quebra de linha */ echo '<br>';
/* Utilizando um do/while, realizar um programa que lance a moeda até tirar
cara (o número 1). No final do programa, imprimir quantos lançamentos da
moeda forem necessários. */
/* Definir um array com 5 strings que sejam nomes. Percorrer esse array para
imprimir todos os nomes na tela. */
$names = array('Carolina', 'Marcia', 'Mariana', 'Lívia', 'Helia');
// Resolver este problema com um for.
for ($i=0;$i< count($names);$i++) {
    echo "$i - $names[$i] <br>";
}                                       /* quebra de linha */ echo '<br>';
// Resolver este problema com while.
$a = -1;
while ($a < (sizeof($names))-1) {
    $a++;
    echo "$a - $names[$a] <br>";
}                                       /* quebra de linha */ echo '<br>';
// Resolver este problema com um do/while. 
$a = -1;
do {
    $a++;
    echo "$a - $names[$a] <br>";
} while ($a < sizeof($names)-1);                        /* quebra de linha */ echo '<br>';
/* Definir um array com 10 números aleatórios entre 0 e 10. Percorrer esse array
para imprimir todos os números. A execução deve terminar se algum dos
números encontrados for 5 (a mensagem impressa deve ser “Encontramos um
5!”). */
$array = array (mt_rand(0, 10), mt_rand(0, 10), mt_rand(0, 10), mt_rand(0, 10),
mt_rand(0, 10), mt_rand(0, 10) ,mt_rand(0, 10), mt_rand(0, 10), mt_rand(0, 10),
mt_rand(0, 10));
// Resolver este problema com um for.
for ($i=0;$i<count($array); $i++){   
if ($array[$i] == 5) {
echo "Encontramos um 5!";                            /* quebra de linha */ echo '<br>';
break;
}
    echo "$i - $array[$i] <br>";
}                                                   /* quebra de linha */ echo '<br>';
// Resolver este problema com um while.
$a = -1;
while ($a++ < (count($array)-1)) {
    echo "$a - $array[$a] <br>";
    if ($array[$a] == 5) {
        echo "Ecnontramos um 5!";                    /* quebra de linha */ echo '<br>';
        break;
    }
}                                                   /* quebra de linha */ echo '<br>';
// Resolver este problema com um do/while.
$a = -1;
do {
    $a++;
    if ($a <(count($array))) {
    echo "$a - $array[$a] <br>";                    
    }
    if ($array[$a] == 5) {
        echo "Ecnontramos um 5!";                    /* quebra de linha */ echo '<br>';
        break;
    } 
} while($a < (count($array)-1));                       /* quebra de linha */ echo '<br>';
/* Utilizando a função “Range”(http://php.net/manual/en/function.range.php),
criar um intervalo de letras (de a até o), imprimir um valor que diga “Na posição
[index], está o valor [value]”, em que [value] será substituído por cada valor do
array e [index] representa o índice. */
$i = 0;
foreach (range('a', 'o') as $letter) {
    $i++;
    echo "Na posição $i, está o valor: $letter. <br>";
}                                                           /* quebra de linha */ echo '<br>';
// Definir uma variável $mascote que seja um array associativo
// No índice animal, deve dizer que animal é.
// No índice idade, deve dizer a idade.
// No índice altura, deve dizer a altura.
// No índice nome, deve dizer o nome
$mascotes = array (
    "animal" => "Cachorro",
    "idade" => 2,
    "altura" => 0.40,
    "nome" => "Klaus"
);
/* Percorrer os valores do array com um foreach que imprima (por exemplo):
animal: cachorro
idade: 5
altura: 0,60
nome: Sonic
*/
foreach ($mascotes as $key => $m) {
    echo "$key: $m. <br>";
}                                                           /* quebra de linha */ echo '<br>';
// A partir de um arquivo com a seguinte variável definida:
$ceu = array( "Itália"=>"Roma", "Luxemburgo"=>"Luxemburgo",
"Bélgica"=> "Bruxelas", "Dinamarca"=>"Copenhagen",
"Finlândia"=>"Helsinki", "França" => "Paris",
"Eslováquia"=>"Bratislava", "Eslovênia"=>"Liubliana",
"Alemanha" => "Berlim", "Grécia" => "Atenas",
"Irlanda"=>"Dublin", "Holanda"=>"Amsterdã",
"Portugal"=>"Lisboa", "Espanha"=>"Madri",
"Suécia"=>"Estocolmo", "Reino Unido"=>"Londres",
"Chipre"=>"Nicósia", "Lituânia"=>"Vilnius", "República
Tcheca"=>"Praga", "Estônia"=>"Tallinn",
"Hungria"=>"Budapeste", "Letônia"=>"Riga",
"Malta"=>"Valletta", "Áustria" => "Viena",
"Polônia"=>"Varsóvia");
// Criar um script que mostre o nome da capital e o país a partir da variável $ceu.
foreach ($ceu as $key=>$c) {
    echo "A capital de $key é $c. <br>";
}                                                           /* quebra de linha */ echo '<br>';
/*
Exemplo de output:
A capital da Holanda é Amsterdã.
A capital da Grécia é Atenas.
A capital da Alemanha é Berlim. */
// A partir de um arquivo com a seguinte variável definida:
$ceu2 = [
"Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
"Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
"Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
"França" => ["Paris", "Nantes", "Lyon"],
"Itália" => ["Roma", "Milão", "Veneza"],
"Alemanha" => ["Munique", "Berlim", "Frankfurt"]
];                                                              
/* Criar um script que mostre o nome de cada país e suas cidades a partir da
variável $ceu com o seguinte formato:
As cidades da Argentina são:
● Buenos Aires
● Córdoba
● Santa Fé
As cidades do Brasil são:
● Brasília
● Rio de Janeiro
● São Paulo */
foreach ($ceu2 as $key=>$c) {
    echo "As cidades da $key são: " . implode(", ", $c). ". <br>";
}                                                       /* quebra de linha */ echo '<br>';
// A partir do exercício anterior:
// Adicionar a cada país um dado extra, além das cidades, chamado naAmerica. Esse valor deve ser true ou false.
// Fazer com que a impressão anterior não mostre países que não estejam na América.
$ceu2 = [
    "Argentina" => [
        "cidades" => ["Buenos Aires", "Córdoba", "Santa Fé"],
        "naAmerica" => true
    ],
    "Brasil" => [
        "cidades" => ["Brasília", "Rio de Janeiro", "São Paulo"],
        "naAmerica" => true
    ],
    "Colômbia" => [
        "cidades" => ["Cartagena", "Bogotá", "Barranquilla"],
        "naAmerica" => true
    ],
    "França" => [
        "cidades" => ["Paris", "Nantes", "Lyon"],
        "naAmerica" => false
    ],
    "Itália" => [
        "cidades" => ["Roma", "Milão", "Veneza"],
        "naAmerica" => false
    ],
    "Alemanha" => [
        "cidades" => ["Munique", "Berlim", "Frankfurt"],
        "naAmerica" => false
    ]
];
/* IMPORTANTE: Para que isso funcione bem, os alunos devem criar um array
associativo para cada país, de forma que cada país tenha os dados de suas
cidades e naAmerica. */

foreach ($ceu2 as $key=>$c) {
    if ($c['naAmerica'] == ['naAmerica' => true]) {
    echo "As cidades da $key são: " . implode(", ", $c['cidades']). ". <br>";
    } 
}