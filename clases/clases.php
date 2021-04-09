<?php

//Clases:Es una plantilla q usamos para crear objetos.

class Principal
{

    public $var = "hola mundo <br>";

    public function Inicio()
    {
        echo $this->var; 
        include 'metodos.php';
    }

}
