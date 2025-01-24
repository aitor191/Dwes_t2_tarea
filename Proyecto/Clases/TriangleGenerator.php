<?php

class TriangleGenerator{

    public function generateTriangle(int $altura){
        $resultado = "<pre>";

        for($i = 1; $i < $altura; $i++){
            for($j = $altura; $j > $i; $j--){
                $resultado .= " ";
            }

            for ($k = 1; $k <= (2*$i - 1); $k++){
                $resultado .= "*";
            }

            $resultado .= "<br>";
        }

        $resultado .= "<pre>";
        return $resultado;        
    }

    /**
     * Se define la clase con su metodo que recibe un entero que define la altura.
     * Se inicializa la var resultado con el <pre> que preserva espacios y saltos de linea.
     * Primer FOR: controla las FILAS del triangulo. Va desde 1 hasta $altura. Cada iteracion es una fila.
     * Segundo FOR: controla ESPACIOS.Añade espacios antes de los asteriscos de cada fila. A mas filas menos espacios.
     * Tercer FOR: controla ASTERISCOS. mas asteriscos por cada fila haciendo un triangulo isosceles.
     * Salto de linea, se cierra el <pre> y se hace el return
     */
}