<?php
require_once('arabicos.php');
function uni_rom($letras)
{
    $unidade_romana = new Arabicos();
    foreach ($unidade_romana->unidades as $chave => $valor) {
        if ($letras == $valor) {
            $letras = $chave + 1;
            return $letras;
        }
    }
}
function dez_rom($letras)
{
    $dezena_romana = new Arabicos();

    $contador = 0;
    $contador2 = 0;
    $letra_dez = $letras;
    $letra_un = $letras;
    $tamanho = strlen($letras);




    foreach ($dezena_romana->dezenas as $chave => $valor) {


        while (strcmp($letra_dez, $valor) != 0) {

            $letra_dez = substr($letras, $contador, $tamanho);
            $contador2 = strlen($letras) - strlen($letra_dez);

            --$tamanho;


            foreach ($dezena_romana->dezenas as $chave => $valor) {
                if (strcmp($letra_dez, $valor) == 0) {
                    $letra_dez = ($chave + 1) * 10;
                    $letra_un = substr($letras, -$contador2, $contador2);
                    $letra_un =  $dezena_romana->conv_arabicos($letra_un);
                    $letra_dez = $letra_dez + $letra_un;
                    return  $letra_dez;
                }
            }
        }
        if (strcmp($letra_dez, $valor) == 0) {
            $letra_dez = ($chave + 1) * 10;

            return  $letra_dez;
        }
    }
}

function cem_rom($letras)
{
    $centena_romana = new Arabicos();

    $contadorA = 0;
    $contadorB = 0;
    $letra_cem = $letras;
    $letra_dezena = $letras;
    $tamanhoA = strlen($letras);




    foreach ($centena_romana->centenas as $chave => $valor) {


        while (strcmp($letra_cem, $valor) != 0) {

            $letra_cem = substr($letras, $contadorA, $tamanhoA);
            $contadorB = strlen($letras) - strlen($letra_cem);

            --$tamanhoA;


            foreach ($centena_romana->centenas as $chave => $valor) {
                if (strcmp($letra_cem, $valor) == 0) {
                    $letra_cem = ($chave + 1) * 100;
                    $letra_dezena = substr($letras, -$contadorB, $contadorB);
                    $letra_dezena =  $centena_romana->conv_arabicos($letra_dezena);
                    // echo $letra_dezena . "<br>";
                    $letra_cem = $letra_cem + $letra_dezena;
                    return  $letra_cem;
                }
            }
        }
        if (strcmp($letra_cem, $valor) == 0) {
            $letra_cem = ($chave + 1) * 100;

            return  $letra_cem;
        }
    }
}
function mil_rom($letras)
{
    $milhas_romana = new Arabicos();

    $contadorA = 0;
    $contadorB = 0;
    $letra_mil = $letras;
    $letra_centanas = $letras;
    $tamanhoA = strlen($letras);




    foreach ($milhas_romana->milhas as $chave => $valor) {


        while (strcmp($letra_mil, $valor) != 0) {

            $letra_mil = substr($letras, $contadorA, $tamanhoA);
            $contadorB = strlen($letras) - strlen($letra_mil);

            --$tamanhoA;


            foreach ($milhas_romana->milhas as $chave => $valor) {
                if (strcmp($letra_mil, $valor) == 0) {
                    $letra_mil = ($chave + 1) * 1000;
                    $letra_centena = substr($letras, -$contadorB, $contadorB);
                    $letra_centena =  $milhas_romana->conv_arabicos($letra_centena);
                    // echo $letra_dezena . "<br>";
                    $letra_mil = $letra_mil + $letra_centena;
                    return  $letra_mil;
                }
            }
        }
        if (strcmp($letra_mil, $valor) == 0) {
            $letra_mil = ($chave + 1) * 100;

            return  $letra_mil;
        }
    }
}
function milDez_rom($letras)
{
    $milDez_romana = new Arabicos();

    $contadorA = 0;
    $contadorB = 0;
    $letra_mildez = $letras;
    $letra_milha = $letras;
    $tamanhoA = strlen($letras);




    foreach ($milDez_romana->milhas_dez as $chave => $valor) {


        while (strcmp($letra_mildez, $valor) != 0) {

            $letra_mildez = substr($letras, $contadorA, $tamanhoA);
            $contadorB = strlen($letras) - strlen($letra_mildez);

            --$tamanhoA;


            foreach ($milDez_romana->milhas_dez as $chave => $valor) {
                if (strcmp($letra_mildez, $valor) == 0) {
                    $letra_mildez = ($chave + 1) * 1000;
                    $letra_milha = substr($letras, -$contadorB, $contadorB);
                    $letra_milha =  $milDez_romana->conv_arabicos($letra_milha);
                    // echo $letra_dezena . "<br>";
                    $letra_mildez = $letra_mildez + $letra_milha;
                    return  $letra_mildez;
                }
            }
        }
        if (strcmp($letra_mildez, $valor) == 0) {
            $letra_mildez = ($chave + 1) * 1000;

            return  $letra_mildez;
        }
    }
}
function milCem_rom($letras)
{
    $milCem_romana = new Arabicos();

    $contadorA = 0;
    $contadorB = 0;
    $letra_milcem = $letras;
    $letra_mildezena = $letras;
    $tamanhoA = strlen($letras);




    foreach ($milCem_romana->milhas_dez as $chave => $valor) {


        while (strcmp($letra_milcem, $valor) != 0) {

            $letra_milcem = substr($letras, $contadorA, $tamanhoA);
            $contadorB = strlen($letras) - strlen($letra_milcem);

            --$tamanhoA;


            foreach ($milCem_romana->milhas as $chave => $valor) {
                if (strcmp($letra_milcem, $valor) == 0) {
                    $letra_milcem = ($chave + 1) * 10000;
                    $letra_mildezena = substr($letras, -$contadorB, $contadorB);
                    $letra_mildezena =  $milCem_romana->conv_arabicos($letra_mildezena);
                    // echo $letra_dezena . "<br>";
                    $letra_milcem = $letra_milcem + $letra_mildezena;
                    return  $letra_milcem;
                }
            }
        }
        if (strcmp($letra_milcem, $valor) == 0) {
            $letra_milcem = ($chave + 1) * 10000;

            return  $letra_milcem;
        }
    }
}
