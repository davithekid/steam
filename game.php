<?php
require_once 'array.php';

$index = $_GET['index'];
$item = ($menuItens[$index]);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="game.css">
    <title>
        <?php
        $titulo = "Document";

        foreach ($menuItens as $tipo => $item) {
            if ($tipo == $index) {
                $titulo = $item['nome'];
            }
        }
        echo $titulo;
        ?>
    </title>
</head>

<body>


    <nav class="nav1">
        <img class="logo" src="steamcinza.png">
        <ul>
            <li><a href="#">Store</a></li>
            <li><a href="#">Biblioteca</a></li>
            <li><a href="#">Comunidade</a></li>
            <li><a href="#">Login</a></li>
        </ul>
    </nav>

    <header class="nav2">
        <ul>
            <li><a href="#">Your Store</a></li>
            <li><a href="#">Games</a></li>
            <li><a href="#">Loja de Pontos</a></li>
            <li><a href="#">News</a></li>
            <input class="pesquisa" type="search" name="pesquisa" placeholder="Pesquisar">
            <button class="lupa" type="submit">🔎</button>
        </ul>
    </header>
    <main>
        <?php
        foreach ($menuItens as $tipo => $item)
            if ($tipo == $index) {
                echo $item['nome'];
            }

        ?>
        <div class="container">
            <?php
            foreach ($menuItens as $tipo => $item) {
                if ($tipo == $index) {

                    echo '<div class="video">' . $item['video'] . '</div>';
                    echo '<ul>';
                    echo '<li>' . $item['foto2'] . '</li>';
                    echo '<li>' . $item['descricao'] . '</li><br>';
                    echo '<li>' . $item['lancamento'] . '</li><br>';
                    echo '<li>' . $item['distribuidora'] . '</li>';
                    echo '</ul>';
                }
            }

            ?>
        </div>
   
    </main>






</body>

</html>