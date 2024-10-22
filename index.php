<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="slide.css">
    <title>Steam</title>
 
 
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
    <aside>
            <h4>Vales-Presente</h4>
            <p>Já disponiveis no Steam</p>
            <h4>RECOMENDADO</h4>
            <p>Por amigos</p>
            <p>Por curadores</p>
            <p>Marcadores</p>
            <h4>Lista de Descobrimento</h4>
            <p>Recomendações</p>
            <p>Lançamentos</p>
            <h4>Ver Categorias</h4>
            <p>Mais vendidos</p>
            <p>Lançamentos</p>
            <p>Em breve</p>
            <p>Ofertas</p>
            <p>Titulos de RV</p>
            <p>Compatativeis com Controle</p>
            <h4>NAVEGAR POR GENERO</h4>
            <p>Gratuito p/ jogar</p>
            <p>Acesso Antecipado</p>
            <p>Aventura</p>
            <p>Ação</p>
            <p>Casual</p>
            <p>Corrida</p>
            <p>Esportes</p>
            <p>Estratégia</p>
            <p>Indie</p>
            <p>Multijogador massivo</p>
            <p>RPG</p>
            <p>Simulação</p>
           
        </aside>
        <section>
            <div class="container-slide">
                <div class="dentro">
                    <?php
                    $menuItens = [
                        "siege" => [
                            "foto" => '<img src="siege.jpg"></img>',
                        ],
                        "naruto" => [
                            "foto" => '<img src="naruto.jpg"></img>',
                        ],
                        "assassinscreed" => [
                            "foto" => '<img src="assassinscreed.jpg"></img>',
                        ]
 
                    ];
                    foreach ($menuItens as $tipo => $item) {
                        echo "<div class='container-slide'>{$item['foto']}</div>";
                    }
                    ?>
                </div>
                <div class="action-button" id="previous" onclick="moveSlide(-1)">&laquo;</div>
                <div class="action-button" id="next" onclick ="moveSlide(1)">&raquo;</div>
            </div>
        </section>
       
    </main>
    <script src="slide.js"></script>
 
</body>
 
</html>
 