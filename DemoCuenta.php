<?php

//Se incluyen las clases necesarias

/**
 *  La clase acepta el importe de la cuenta. 
 *  Si el valor del importe es correcto se crea la cuenta
 * 
 *  A continuación el usuario debería introducir la cantidad a ingresar
 *  y se añade y después la cantidad a sacar y se reintegra.
 *  
 *  Hay que capturar las posibles excepciones que se puedan dar y que creas conveniente
 *  además de las excepciones indicadas
 *  Se indicarán mensajes de error adecuados en cada caso
 *  Incluye un bloque finally en el que se muestre el estado de la cuenta de la Cuenta
 *  Puede que tengas que tratar otra excepción dentro de finally
 *  Puedes lazar las excepciones que se te ocurran
 */
include "vistas/cabecera.php";
try {
    //Pruebas:
    // 1º Todo bienBien 
    // 2º Saldo no numérico
    // 3º Lanzar argumentos inadecuados: negativos
    // 4º Lanzar Saldo insufuciente por sacar más
    // 5º Lanzar otro tipo si se os ocurre
    $saldo = "-15000";
    echo "Saldo inicial: $saldo <br />";
    $saldo = new Cuenta($saldo);

    $cantidadIngre = 1000;
    echo "Cantidad a ingresar: $cantidadIngre <br />";
    $saldo->ingresar($cantidadIngre);

    $cantidadSacar = 500;
    echo "Cantidad a sacar: $cantidadSacar <br />";
    $saldo->sacar($cantidadSacar);
} catch (InvalidArgumentException $ex) {
    echo "Error al inicio, al ingresar o al sacar: " . $ex->getMessage();
} catch (SaldoInsuficienteException $ex) {
    echo "ERROR!! " . $ex->mostrar();
} finally {

    if ($saldo != null) {
        echo $saldo->getImporte();
    }
}
include "vistas/pie.php";
