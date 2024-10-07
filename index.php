<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Social</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Mi Blog</h1>
    </header>
    <aside>
            <nav>
                <a href="?id=Inicio">Inicio</a>
                <a href="?id=Sobre mi">Sobre mí</a>
                <a href="?id=Blog">Blog</a>
                <a href="?id=Contacto">Contacto</a> 
            </nav>
        </aside>
    <main>
        <section>
            <?php 
                require_once ('post.php');
                $listado = obtenerPosts();
                foreach($listado as $post) {
                    echo "<article>";
                        echo "<h2>" . $post->getTitle() . "</h2>";
                        echo "<p>" . $post->getContent() . "</p>";
                        echo "<span class='tag'> <p>Tags: ";
                            foreach($post->getTags() as $tags) {
                                echo "<span class='tag_span'> #" . $tags->getName() . "</span>";
                            }
                            echo "</p>";
                            echo "</span>";
                        echo "<span>";
                            echo "<p> Likes: " . $post->getLikes() . " likes </p>";
                        echo "</span>";
                    echo "</article>";
                }
            ?>
        </section>
    </main>
    
</body>
</html>