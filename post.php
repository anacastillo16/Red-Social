<?php 
    class Post {
        private string $title;
        private string $content;
        private $tags;
        private $likes;

        public function __construct(string $title, string $content, $tags = [], $likes) {
            $this->title = $title;
            $this->content = $content;
            $this->tags = $tags;
            $this->likes = $likes;
        }

        public function getTitle() {
            return $this->title;
        }
        public function getContent() {
            return $this->content;
        }
        public function getTags() {
            return $this->tags;
        }
        public function getLikes() {
            return $this->likes;
        }
    }

    class Tag {
        private string $name;

        public function __construct(string $name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }
    }

    function obtenerPosts() {
        $posts = 
            [new Post("Título del primer post","Este es el contenido del primer post de mi blog. Aquí puedes escribir sobre cualquier tema que te interese.",[new Tag("Tecnología"), new Tag("Programación"), new Tag("HTML")], 10),
            new Post("Título del segundo post","Este es el contenido del segundo post de mi blog. Puedes escribir sobre temas diferentes y ofrecer tu opinión o experciencias", [new Tag("Viajes"), new Tag("Aventura"), new Tag("Fotografía")], 5), 
            new Post("Título del tercer post","Contenido del tercer post de mi blog. Aquí puedes compartir tus ideas, experiencias o cualquier cosa que quieras.", [new Tag("Salud"), new Tag("Bienestar"), new Tag("EstiloDeVida")], 3)
        ];
        return $posts;
    }
    
    