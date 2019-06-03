<?php namespace models;

require_once 'vendor/autoload.php';

class Header{

    private $idioma;
    private $charset = 'UTF-8';
    private $title = 'Sin titulo';
    private $description;
    private $image;
    private $urlWeb;


        public function __construct(

            $idioma,
            $charset,
            $title,
            $description,
            $image,
            $urlWeb){

            $this->idioma = $idioma;
            $this->charset = $charset;
            $this->title = $title;
            $this->description = $description;
            $this->image = $image;
            $this->urlWeb = $urlWeb;
            
        }

    // METODOS

    public function printHead(){

        echo '<!DOCTYPE html>';
        echo "<html lang= \" $this->idioma \" >";

    echo '<head>';      


        echo'<!-- Metadatos Web -->';
        echo "<meta charset=\" $this->charset\">";
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '<meta http-equiv="X-UA-Compatible" content="ie=edge">';
    
        echo '<!-- HTML Meta Tags -->';
        echo "<title>$this->title</title>";
        echo "<meta name=\"description\" content=\" $this->description \">";
    
        echo '<!-- Google / Search Engine Tags -->';
        echo "<meta itemprop=\"name\" content=\" $this->description \">";
        echo "<meta itemprop=\"description\" content=\" $this->description \">";
        echo"<meta itemprop=\"image\" content=\" $this->image \">";

        echo '<!-- Facebook Meta Tags -->';
        echo '<meta property="og:url" content="' . $this->urlWeb . '">';
        echo '<meta property="og:type" content="website">';
        echo '<meta property="og:title" content="'. $this->title .'">';
        echo '<meta property="og:description" content="' . $this->description . '">';
        echo '<meta property="og:image" content="' . $this->image . '">';
    
        echo '<!-- Twitter Meta Tags -->';
        echo '<meta name="twitter:card" content="summary_large_image">';
        echo '<meta name="twitter:title" content="' . $this->description . '">';
        echo '<meta name="twitter:description" content="' . $this->description . '">';
        echo '<meta name="twitter:image" content="' . $this->image . '">';

    echo '</head>';

    }

    // private function fontawersome(){};

        //echo '<!-- FontAwesome -->';

//     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    private function css(){

        echo'<!-- Nuestro CSS Compilado -->';

        echo'<link rel="stylesheet" href="css/reset.css">';
        echo'<link rel="stylesheet" href="css/styles.css">';
        echo '<link rel="stylesheet" href="css/estilos.css">';

    }


    private function jss(){}

}

