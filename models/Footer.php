<?php namespace models;

require_once 'vendor/autoload.php';

class Footer{

    private $logo;
    private $tel;
    private $tel2;
    private $email;
    private $alt;
    private $direccion;


    public function __construct(

        $logo,
        $tel,
        $tel2,
        $email,
        $alt,
        $direccion
    ){

        $this->logo = $logo;
        $this->tel = $tel;
        $this->tel2 = $tel2;
        $this->email = $email;
        $this->alt = $alt;
        $this->direccion = $direccion;

    }
        public function printFooter(){

            echo '<section class="legal&contactar">';

                echo '<article>';

                    echo '<h2>LEGAL</h2>';

                    echo '<a href="#">Cookies</a>';
                    echo '<a href="#">Terminos y condiciones</a>';
                    echo '<a href="#">Devoluciones</a>';

            
                    echo '<h2>CONTACTAR</h2>';

                    echo '<p>'. $this->tel .'</p>';
                    echo '<p>'. $this->tel2 .'</p>';
                    echo '<p>'. $this->email .'</p>';

                echo '</article>';

                echo '<p>'. $this->direccion .'</p>';

            echo '</section>';

            echo '<section class="newsletter">';

                echo '<h1>NEWSLETTER</h1>';

                echo '<p>Introduce tu email y podrás recibir nuestras noticias</p>';

                echo '<form class ="formulario" action="" method="POST">';
                echo '<input type="email" name="email" id="">';
                echo '</form>';


                echo '<p>@ 2019 Copyright Empresa S.L.</p>';


            echo '</section>';

            echo '<hr>';

            echo '<section class="logo&nav">';

                echo '<img src="'. $this->logo .'" alt="'.$this->alt.'">';

                echo'<nav>';

                    echo'<a href="servicios.php">Servicios</a>';
                    echo'<a href="galeria.php">Galeria</a>';
                    echo'<a href="trabajos.php">Trabajos</a>';

                echo'</nav>';

            echo '</section>';

        }

    
}