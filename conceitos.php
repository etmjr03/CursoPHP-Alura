<?php 

echo '<link rel="stylesheet" href="style.css">';

echo '<div class="container">';

// tipos primitivos do PHP
echo '<h3>tipos primitivos do PHP</h3>';

$nome = 'juninho';
$idade = 24;
$porcentagem = 99.99;
$jogos = ['LOL', 'CS', 'Sea Of Thieves'];
$gamer = true;
$prints = [
    $nome,
    $idade,
    $porcentagem,
    $jogos,
    $gamer
];

echo "A ordem dos dados são: juninho, 24, 99.99, jogos é um array, true";

foreach($prints as $values) {
    $tipoDeDado = gettype($values);
    echo "<br> tipo de dado é: " .$tipoDeDado;
}

echo '<br>';

// for e array comum ou numérico
echo '<h3>Laço de repetição for, foreach</h3>';
echo '<h4>For</h4>';

$array = [1, 2, 3, 4, 5];

List($numero1, $numero2) = $array;

echo "$numero1 e $numero2 <br>";

for($i = 0; $i < count($array); $i++) {
    echo $array[$i] . PHP_EOL;
}

echo '<pre>';
print_r($array);
echo '</pre>';

//array associativo
echo '<h4>Array associativo</h4>';

$juninho = [
    'nome' => 'juninho',
    'idade' => 24
];

$ana = [
    'nome' => 'ana',
    'idade' => 23
];

$maria = [
    'nome' => 'maria',
    'idade' => 24
];

$pessoas = [
    $juninho,
    $ana,
    $maria
];

echo '<pre>';
print_r($pessoas);
echo '</pre>';

for($i = 0; $i < count($pessoas); $i++) {
    echo '<br> nomes: ' .$pessoas[$i]['nome'] . PHP_EOL;
}

echo '<h4>Foreach</h4>';

foreach($pessoas as $conta) {
    echo '<pre>';
    print_r($conta['nome']);
    echo '</pre>';
}

// adicionando itens em um array associativo
echo '<h4>Adicionando valores em um array associativo</h4>';

$pessoas[] = [
    'nome' => 'luis',
    'idade' => 25
];

echo '<pre>';
print_r($pessoas);
echo '</pre>';

echo '<h3>Array normal de times</h3>';
$times = [
    'gremio',
    'cruzeiro',
    'flamengo'
];

$times[] = 'inter';

echo '<pre>';
print_r($times);
echo '</pre>';

$timeCampeao = [
    ['nome' => 'gremio',
    'campeao' => true]
];

$timeCampeao[] = [
    'nome' => 'cruzeiro',
    'campeao' => false
];

echo '<pre>';
print_r($timeCampeao);
echo '</pre>';

// exemplo de tipos de chaves de um array

$tiposDeChaves = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd',
    'teste' => 'e'
];

// O array só aceita em suas chaves int ou string, caso utilize alguns outros tipos de dados,
// ele irá tentar converter para int como nos casos do exemplo acima

echo '<h3>Função List</h3>';

$informacoes = [
    'nome' => 'juninho',
    'idade' => 24
];

List('nome' => $nome, 'idade' => $idade) = $informacoes;
// Também pode ser usado assim: ['nome' => $nome, 'idade' => $idade] = $informacoes;

echo "O nome é $nome e a idade é $idade <br>";

echo '<pre>';
print_r($tiposDeChaves);
echo '</pre>';

echo '<h3>If Ternário</h3>';

$minhaIdade = 17;

echo "Para entrar na festa, você precisa ter mais que 18 anos! <br>";

$mensagem = $minhaIdade >= 18 ? "Você tem $minhaIdade, pode entrar!" : "Você não pode entrar, pois sua idade é: $minhaIdade";

echo $mensagem;

echo '<h3>If, else, else if</h3>';

$acompanhanteMaior = true;

if($minhaIdade >= 18) {
    echo "Você pode entrar, pois você tem $minhaIdade anos.";
} elseif ($minhaIdade <= 18 && $acompanhanteMaior == true) {
    echo "Você pode entrar, pois apesar da sua idade ser $minhaIdade, você está acompanhado!";
} else {
    echo "Você não pode entrar!";
}

echo '</div>';