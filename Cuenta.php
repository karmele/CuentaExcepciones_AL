<?php

/**
 *   Representa a una cuenta bancaria
 */
class Cuenta
{

    private $importe;

    /**
     * Constructor  
     * Si el importe no es numérico se lanza y se avisa de la excepción InvalidArgumentException
     * Si el importe es menor o igual a 0 la excepció es Saldo InsuficienteException
     */
    public function __construct($importe)
    {
        
        $this->importe = $importe;
    }

    /**
     * Accesor para el importe
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     *  Añadir una cantidad
     *  Si la cantidad es <= 0 se lanza y se avisa de la excepción InvalidArgumentException
     *  
     *  
     */
    public function ingresar($cantidad)
    {
        
        
        $this->importe += $cantidad;
    }

     /**
     *  Sacar una cantidad
     *  Si la cantidad es <= 0 se lanza y se avisa de la excepción InvalidArgumentException
     *  Si no hay saldo sufieciente se lanza la excepcion SaldoInsuficienteException
     *  
     */
    public function sacar($cantidad)
    {
      
        
        $this->importe -= $cantidad;
    }

    /**
     * 
     */
    public function mostrar()
    {
        return "Saldo en la cuenta: " . $this->importe;
    }

}
