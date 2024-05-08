<!DOCTYPE html>
<html>
<body>
 
<?php
/*1 -Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5.
$n1 = 11; //numero a ser alterado
$n2 = 10; //numero a ser alterado
$soma = $n1+$n2;
//verefica se a soma é maior ou menor que vinte
if($soma>20){
$soma = $soma+8;
echo $soma;
}else{
$soma = $soma-5;
echo $soma;
}
*/


/*2 - Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes.
//recebe as variaveis
$n1 = 1; //numero a ser alterado
$confirma = 1;

//estrutura condicional para avaliar se os numeros são divisiveis
if($n1%10==0){
echo "É divisível por 10";
echo"<br>";
$confirma = 0;
}
if($n1%5==0){
echo "É divisível por 5";
echo"<br>";
$confirma = 0;
}
if($n1%2==0){
echo "É divisível por 2";
echo"<br>";
$confirma = 0;
}
if($confirma==1){
echo "Não é divisivel por nenhum numero previsto.";
}*/

 
/*3 - Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.
    $nome = "Wesley";
    $sexo = "M";
    $int_idade = 18;
 
        if ($sexo == 'F' && $int_idade < 25)
        {
            echo $nome . ", ACEITA\n";
        }
        else
        {
            echo $nome . ", NÃO ACEITA\n";
        }    
   */



/*4 - Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes)

    $num1 = 50;
    $num2 = 1;
    $num3 = 18;
 
        // Colocar os números em um array
        $numeros = array($num1, $num2, $num3);
 
        // Ordenar o array em ordem decrescente
        rsort($numeros);
 
        // Imprimir os números
        echo "Números em ordem decrescente: " . $numeros[0] . ", " . $numeros[1] . ", " . $numeros[2] . "\n";
   
*/




/*5 - Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados
    $lado1 = readline("Digite o primeiro lado: "); // lê o primeiro número inserido
    $lado2 = readline("Digite o segundo lado: "); // lê o segundo número
    $lado3 = readline("Digite o terceiro lado: "); // lê o terceiro

    if($lado1 == $lado2 && $lado2 == $lado3) {
        echo "O triângulo é equilátero"; // verifica se possui todos os lados iguais
    } elseif($lado1 == $lado2 || $lado2 == $lado3 || $lado1 == $lado3) { // verifica se tem pelo menos 2 lados iguais
        echo "O triângulo é isósceles";
    } else { // se n for nenhum dos demais só pode ser escaleno
        echo "O triângulo é escaleno";
    }
*/


/*6 - Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número
    $numero = readline("Digite um número entre 1 e 12: ");
        // lê o numero de 1 à 12

    switch($numero) { 
        // verifica qual mês o número se encaixa
        case 1:
            echo "Janeiro";
            break;
        case 2:
            echo "Fevereiro";
            break;
        case 3:
            echo "Março";
            break;
        case 4:
            echo "Abril";
            break;
        case 5:
            echo "Maio";
            break;
        case 6:
            echo "Junho";
            break;
        case 7:
            echo "Julho";
            break;
        case 8:
            echo "Agosto";
            break;
        case 9:
            echo "Setembro";
            break;
        case 10:
            echo "Outubro";
            break;
        case 11:
            echo "Novembro";
            break;
        case 12:
            echo "Dezembro";
            break;
        default:
            // caso não entre em um case o valor sai como default
            echo "Não existe mês com este número";
    }
*/ 

/*7 - A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado, o tipo de usuário (professor ou aluno) e possa imprimir um recibo conforme mostrado a seguir. Considerar que o professor tem 10 dias para devolver o livro o aluno somente 3 dias
// Função para imprimir o recibo do empréstimo do livro
function imprimirRecibo($nomeLivro, $tipoUsuario) {
    if ($tipoUsuario === 'professor'||$tipoUsuario === 'PROFESSOR'||$tipoUsuario==='Professor') {
        $prazoDevolucao = 10;
    } else {
        $prazoDevolucao = 3;
    }
 
    // Obtém a data de devolução somando o prazo ao dia atual
    $dataDevolucao = date('d/m/Y', strtotime("+$prazoDevolucao days"));
 
    // Imprime o recibo
    echo "Recibo de Empréstimo\n";
    echo "====================\n";
    echo "Livro: $nomeLivro\n";
    echo "Tipo de usuário: $tipoUsuario\n";
    echo "Data de devolução: $dataDevolucao\n";
    // Solicitação das variáveis ao usuário
echo "Informe o nome do livro: ";
$nomeLivro = readline();
echo "Informe o tipo de usuário (professor ou aluno): ";
$tipoUsuario = readline();
// Chama as funções com as variáveis inseridas pelo usuário
imprimirRecibo($nomeLivro, $tipoUsuario);
}
*/

/*8 - Criar um algoritmos que leia um número e imprima todos os número de 1 até ele e o seu produto.
// Função para imprimir números de 1 até o número dado e seu produto
function imprimirNumerosEProduto($numero) {
    $produto = 1;
    echo "Números de 1 até $numero:\n";
    for ($i = 1; $i <= $numero; $i++) {
        echo "$i ";
        $produto *= $i;
    }
    echo "\nProduto dos números: $produto\n";
}
// Chama as funções com as variáveis inseridas pelo usuário
echo "Informe um número para imprimir números até ele e seu produto: ";
$num = intval(readline());
imprimirNumerosEProduto($num);
*/

/*9 - Entrar com o número de vezes que se deseja imprimir a palavra SOL e imprimir
function imprimirPalavra($numeroVezes) {
    for ($i = 0; $i < $numeroVezes; $i++) {
        echo "SOL ";
    }
}
 
function calcularSomaPositivosENegativos($numeros) {
    $somaPositivos = 0;
    $totalNegativos = 0;
 
    foreach ($numeros as $numero) {
        if ($numero > 0) {
            $somaPositivos += $numero;
        } elseif ($numero < 0) {
            $totalNegativos++;
        }
    }
 
    echo "Soma dos números positivos: $somaPositivos\n";
    echo "Total de números negativos: $totalNegativos\n";
}
 
// Imprimir a palavra SOL
echo "Digite o número de vezes que deseja imprimir a palavra SOL: ";
$numeroVezes = readline();
imprimirPalavra($numeroVezes);
*/ 

/*10 - Entrar com 20 números e imprimir a soma dos positivos e o total de números negativos
// Entrar com 20 números
$numeros = [];
echo "\nDigite 20 números:\n";
for ($i = 1; $i <= 20; $i++) {
    $numero = readline("Número $i: ");
    $numeros[] = intval($numero);
}
 
// Calcular a soma dos positivos e o total de negativos
calcularSomaPositivosENegativos($numeros);

*/

/*11 - Criar um algoritmos que imprima a tabuada de um número
// Função para exibir a tabela de multiplicação
function Tabela($numero) {
    echo "Tabela de Multiplicação para o número $numero:\n";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado\n";
    }
}
 
// Solicita ao usuário um número para multiplicar
echo "Digite um número para multiplicar: ";
$numero = trim(fgets(STDIN));
 
// Verifica se o número é válido
if (is_numeric($numero)) {
    Tabela($numero);
} else {
    echo "O valor digitado não é um número válido. Por favor, tente novamente.\n";
}
*/

/*12 - Criar um algoritmos que entre com uma palavra e imprima conforme o exemplo
◦Palavra: sonho
◦SONHO
◦SONHO SONHO
◦SONHO SONHO SONHO
◦SONHO SONHO SONHO SONHO


// Função para obter entrada do usuário
function getUserInput($prompt) {
    echo $prompt . ": ";
    return trim(fgets(STDIN));
}
 
// Obter a palavra do usuário
$palavra = getUserInput("Digite uma palavra");
 
// Obter a quantidade de linhas do usuário
$quantidade = (int) getUserInput("Digite a quantidade de linhas");
 
// Verificar se a entrada da quantidade de linhas é válida
if ($quantidade <= 0) {
    echo "A quantidade de linhas deve ser um número inteiro positivo.";
} else {
    // Loop para imprimir a palavra repetida conforme a quantidade de linhas
    for ($i = 1; $i <= $quantidade; $i++) {
        echo $i . ": ";
        // Imprime a palavra repetida
        for ($j = 0; $j < $i; $j++) {
            echo $palavra . " ";
        }
        echo PHP_EOL;
    }
}




*/

?>

</body>
</html>
