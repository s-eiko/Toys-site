<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descrição dos brinquedos</title>
    <link rel="stylesheet" href="desc.css">
</head>
<body>
    <header>
        <h1>Descrição dos brinquedos</h1>
    </header>
    <nav>
        <a href="home.php">Página inicial</a>
        <a href="alunos.html">Integrantes do grupo</a>
    </nav>
    <div id='selector'>
        <p>Qual tipo de jogo está procurando?</p>
        <div>
            <a href="#fisico">Jogos físicos</a>
            <a href="#console">Jogos de console</a>
        </div>
    </div>
    <main>
        <?php
            $arquivo = file_get_contents('brinquedos.json');
            $json = json_decode($arquivo);

            echo "<div id='fisico'>";
            echo "<h2>Jogos físicos</h2>";
            foreach($json as $brinquedo) {
                if ($brinquedo->tipo == "fisico") {
                    echo "<section>";
                    echo "<img src='".$brinquedo->imagem."'>";
                    echo "<div>";
                    echo "<h2>".$brinquedo->nome."</h2>";
                    echo "<p><span>Sobre:</span> ".$brinquedo->desc."</p>";
                    echo "<p>Contém: ".$brinquedo->pecas."</p>";
                    echo "<p>Classificação indicativa: ".$brinquedo->class."</p>";
                    echo "<p><span>".$brinquedo->preco."</span></p>";
                    echo "</div>";
                    echo "</section>";
                }
            }
            echo "</div>";

            echo "<div id='console'>";
            echo "<h2>Jogos de console</h2>";
            foreach($json as $brinquedo) {
                if ($brinquedo->tipo == "console") {
                    echo "<section>";
                    echo "<img src='".$brinquedo->imagem."'>";
                    echo "<div>";
                    echo "<h2>".$brinquedo->nome."</h2>";
                    echo "<p><span>Sobre:</span> ".$brinquedo->desc."</p>";
                    echo "<p>Contém: ".$brinquedo->pecas."</p>";
                    echo "<p>Classificação indicativa: ".$brinquedo->class."</p>";
                    echo "<p><span>".$brinquedo->preco."</span></p>";
                    echo "</div>";
                    echo "</section>";
                }
            }
            echo "</div>";
        ?>
    </main>
</body>
</html>