<?php
// metodo esattico mandar llamar un metodo statico sin instanciar un objeto de la clase atraves de los 4 puntos
class Metodo
{

    public static function mostrar($nombre)
    {
        echo "El nombres es:" . $nombre;
    }
}

$nombre    = "ever";
$resultado = Metodo::mostrar($nombre);

/*
$name = new Metodo();
$name->mostrar($nombre);
*/