<?php namespace models;

require_once 'vendor/autoload.php';


class Header{

    // Propiedades

    private $logo;
    private $alt;
   // private $paginas = [];



    private function __constructor(
        
        $logo,
        $alt
        //$paginas
        ){

        $this->logo = $logo;
        $this->alt = $alt;
        //$this->paginas = $paginas;
    }

    // Metodos

    public function printHeader(){


        echo'<header>';

        echo'<h1>';

            echo'<img src="' . $this->logo .'" alt="' . $this->alt .'">';

        echo'</h1>';

        echo'<nav>';

        // foreach($this->paginas AS $valor){

        //     echo'<a href="' .  .'">' .   .  '</a>';
        // }

        echo'<a href="servicios.php">Servicios</a>';
        echo'<a href="galeria.php">Galeria</a>';
        echo'<a href="trabajos.php">Trabajos</a>';

        echo'</nav>';

        echo'</header>';
    }

}

// $header = new models\Header(
//     'img/svg/logo.svg',
//     'logotipo de la marca'
// );