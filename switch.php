<?php

include('../includes/header.php');

$tecnolodge = $_POST['tec'];

echo "<br>";

echo '<a href="index.php"><button>Voltar</button></a>';

echo "<br>";

switch ($tecnolodge) {

    case 'html':
        echo "<br>";
        echo "<p><strong>HTML: </strong> Linguagem de Marcação de HiperTexto é o bloco de construção mais básico da web. Define o significado e a estrutura do conteúdo da web.</p>";
        echo "<br>";
        echo '<div class="img"><img src="assets/' . $tecnolodge . '.png" alt=""></div>';
        break;

    case 'css':
        echo "<br>";
        echo "<p><strong>CSS: </strong> Cascading Style Sheets ou Folhas de Estilo em Cascata é uma linguagem de estilo usada para descrever a apresentação de um documento escrito em HTML ou em XML. O CSS descreve como elementos são mostrados na tela, no papel, na fala ou em outras mídias.</p>";
        echo "<br>";
        echo '<div class="img"><img src="assets/' . $tecnolodge . '.png" alt=""></div>';
        break;

    case 'js':
        echo "<br>";
        echo "<p><strong>JS: </strong> JavaScript é uma linguagem baseada em protótipos, multi-paradigma e dinâmica, suportando estilos de orientação a objetos, imperativos e declarativos (como por exemplo a programação funcional).</p>";
        echo "<br>";
        echo '<div class="img"><img src="assets/' . $tecnolodge . '.png" alt=""></div>';
        break;

    case 'php':
        echo "<br>";
        echo "<p><strong>PHP: </strong> Hypertext Preprocessor é uma linguagem de script do lado do servidor de código aberto que pode ser utilizada junto com HTML para construir aplicações web e sites dinâmicos.</p>";
        echo "<br>";
        echo '<div class="img"><img src="assets/' . $tecnolodge . '.png" alt=""></div>';
        break;

    case 'sql':
        echo "<br>";
        echo "<p><strong>SQL: </strong> Structured Query Language é uma linguagem de programação padronizada que permite a gestão e manipulação de bancos de dados relacionais. É usada para armazenar, alterar, remover, procurar e recuperar informações de uma base de dados, além de manter e otimizar o seu desempenho.</p>";
        echo "<br>";
        echo '<div class="img"><img src="assets/' . $tecnolodge . '.png" alt=""></div>';
        break;

    case 'laravel':
        echo "<br>";
        echo "<p><strong>Laravel: </strong> Definição. Laravel é um framework PHP gratuito utilizado no desenvolvimento de sistemas web. Ele deixa o código mais simples e legível, com suporte a recursos avançados.</p>";
        echo "<br>";
        echo '<div class="img"><img src="assets/' . $tecnolodge . '.png" alt=""></div>';
        break;

}

include('../includes/footer.php');

?>

<html>

    <style>

        a button{
        width: 100px;
        height: 30px;
        font-size: 16px;
        background-color: #e8a3b6;
        border-radius: 8px;
        transition: 0.4s;
        }

        a button:hover{
        transition: 0.4s;
        background-color: #f2f6c3;
        }

    </style>

</html>