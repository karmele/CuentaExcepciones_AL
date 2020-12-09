<?php

/**
 *    
 */
class SaldoInsuficienteException extends //COMPLETAR
{

    private $mensaje;

    /**
     * Constructor  
     */
    public function SaldoInsuficienteException($mensaje)
    {
        $this->mensaje = $mensaje;
    }

    //mostrar
    public function mostrar()
    {
        return $this->mensaje;
    }

}
