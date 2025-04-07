<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de brinquedos</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <header>
        <h1>Catálogo de brinquedos</h1>
    </header>
    <nav>
        <a href="desc.php">Descrição dos brinquedos</a>
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
        <section>
            <?php
                $arquivo = file_get_contents('brinquedos.json');
                $json = json_decode($arquivo);

                echo "<h2>Jogos físicos</h2>";
                echo "<div id='fisico' class='brinq'>";
                foreach($json as $brinquedo) {
                    if ($brinquedo->tipo == "fisico") {
                        echo "<section>";
                        echo "<h2>".$brinquedo->nome."</h2>";
                        echo "<img src='".$brinquedo->imagem."'>";
                        echo "<p style='text-align: justify;'>".$brinquedo->intro."</p>";
                        echo "</section>";
                    }
                }
                echo "</div>";

                echo "<h2>Jogos de console</h2>";
                echo "<div id='console' class='brinq'>";
                foreach($json as $brinquedo) {
                    if ($brinquedo->tipo == "console") {
                        echo "<section>";
                        echo "<h2>".$brinquedo->nome."</h2>";
                        echo "<img src='".$brinquedo->imagem."'>";
                        echo "<p style='text-align: justify;'>".$brinquedo->intro."</p>";
                        echo "</section>";
                    }
                }
                echo "</div>";
            ?>
        </section>
    </main>
</body>

</html>