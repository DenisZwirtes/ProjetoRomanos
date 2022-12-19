<?php
require_once('romanos.php');

function unidade($numero)
{
    if ((int)$numero == 0) {
        return "";
    }
    $numero--;
    $numero_unidade = new Romano();
    foreach ($numero_unidade->unidades as $chave => $valor) {

        if ($numero  == $chave) {

            $numero = $valor;
        }
    }
    return $numero;
}
function dezena($numero)
{


    $novo_num1 = substr($numero, 1, 1);
    $novo_num2 = substr($numero, 0, 1);

    $numero_dezena = new Romano();
    $novo_num1 = $numero_dezena->conv_romanos($novo_num1);
    if ((int)$novo_num2 == 0) {
        return $novo_num1;
    }
    --$novo_num2;

    foreach ($numero_dezena->dezenas as $chave => $valor) {
        if ($novo_num2  == $chave) {

            $novo_num2 = $valor;


            $novo_num2 = $novo_num2 . $novo_num1;
        }
    }


    return $novo_num2;
}
function centena($numero)
{

    $novo_num2 = substr($numero, 1, 2);
    $novo_num3 =  substr($numero, 0, 1);
    $numero_centena = new Romano();
    $novo_num2 = $numero_centena->conv_romanos($novo_num2);
    if ((int)$novo_num3 == 0) {
        return $novo_num2;
    }
    --$novo_num3;
    $numero_centena = new Romano();
    foreach ($numero_centena->centenas as $chave => $valor) {
        if ($novo_num3  == $chave) {

            $novo_num3 = $valor;
            $novo_num3 = $novo_num3 . $novo_num2;
        }
    }

    return $novo_num3;
}
function milha($numero)
{

    $novo_num3 = substr($numero, 1, 3);
    $novo_num4 =  substr($numero, 0, 1);
    $numero_milha = new Romano();
    $novo_num3 = $numero_milha->conv_romanos($novo_num3);
    if ((int)$novo_num4 == 0) {
        return $novo_num3;
    }
    --$novo_num4;

    foreach ($numero_milha->milhas as $chave => $valor) {
        if ($novo_num4  == $chave) {

            $novo_num4 = $valor;

            $novo_num4 = $novo_num4 . $novo_num3;
        }
    }

    return $novo_num4;
}
function milha_dez($numero)
{

    $novo_num4 = (int) substr($numero, 1, 4);
    $novo_num5 = (int) substr($numero, 0, 1);
    $num_milha_dez = new Romano();
    $novo_num4 = $num_milha_dez->conv_romanos($novo_num4);
    if ((int)$novo_num5 == 0) {
        return $novo_num4;
    }
    --$novo_num5;

    foreach ($num_milha_dez->milhas_dez as $chave => $valor) {
        if ($novo_num5  == $chave) {

            $novo_num5 = $valor;
            $novo_num5 = $novo_num5 . $novo_num4;
        }
    }

    return $novo_num5;
}
function milha_cem($numero)
{

    $novo_num5 = (int) substr($numero, 1, 5);
    $novo_num6 = (int) substr($numero, 0, 1);
    $num_milha_cem = new Romano();
    $novo_num5 = $num_milha_cem->conv_romanos($novo_num5);
    if ((int)$novo_num6 == 0) {
        return $novo_num5;
    }
    --$novo_num6;

    foreach ($num_milha_cem->milhas_cem as $chave => $valor) {
        if ($novo_num6  == $chave) {

            $novo_num6 = $valor;
            $novo_num6 = $novo_num6 . $novo_num5;
        }
    }

    return $novo_num6;
}
