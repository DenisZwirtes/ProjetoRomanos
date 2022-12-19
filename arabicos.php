<?php
//require_once('conversor_arabicos.php');
require_once('index.php');
require_once('conversor_arabicos.php');

class Arabicos
{
    public $unidades = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX'];
    public $dezenas = ['X', 'XX', 'XXX', 'XL', 'L', 'LX', 'LXX', 'LXXX', 'XC'];
    public $centenas = ['C', 'CC', 'CCC', 'CD', 'D', 'DC', 'DCC', 'DCCC', 'CM'];
    public $milhas = ['M', 'MM', 'MMM', '_I_V', '_V', '_V_I', '_V_I_I', '_V_I_I_I', '_I_X'];
    public $milhas_uni = ['_I', '_I_I', '_I_I_I', '_I_V', '_V', '_V_I', '_V_I_I', '_V_I_I_I', '_I_X'];
    public $milhas_dez = ['_X', '_X_X', '_X_X_X', '_X_L', '_L', '_L_X', '_L_X_X', '_L_X_X_X', '_X_C'];
    public $milhas_cem = ['_C', '_C_C', '_C_C_C', '_C_D', '_D', '_D_C', '_D_C_C', '_D_C_C_C', '_C_M'];

    function conv_arabicos($letras)
    {
        $letras = strtoupper($letras);
        $contador = 1;
        if (substr($letras, 0, $contador) == '_') {
            $contador++;
        }
        $letra_recortada = substr($letras, 0, $contador);




        if (strcmp($letra_recortada, 'I') == 0 || strcmp($letra_recortada, 'V') == 0) {
            return uni_rom($letras);
        } elseif (strcmp($letra_recortada, 'X') == 0 || strcmp($letra_recortada, 'L') == 0) {
            return dez_rom($letras);
        } elseif (strcmp($letra_recortada, 'C') == 0 || strcmp($letra_recortada, 'D') == 0) {
            return cem_rom($letras);
        } elseif (
            strcmp($letra_recortada, 'M') == 0 || strcmp($letra_recortada, '_I') == 0
            || strcmp($letra_recortada, '_V') == 0
            || strcmp($letra_recortada, '_V_I') == 0 || strcmp($letra_recortada, '_V_I_I') == 0 ||
            strcmp($letra_recortada, '_V_I_I_I') == 0 || strcmp($letra_recortada, '_X_C') == 0
        ) {
            return mil_rom($letras);
        } elseif (
            strcmp($letra_recortada, '_X') == 0 || strcmp($letra_recortada, '_X_X') == 0
            || strcmp($letra_recortada, '_X_X_X') == 0
            || strcmp($letra_recortada, '_X_L') == 0 || strcmp($letra_recortada, '_L') == 0 ||
            strcmp($letra_recortada, '_L_X') == 0 || strcmp($letra_recortada, '_L_X_X') == 0 || strcmp($letra_recortada, '_L_X_X_X') == 0 || strcmp($letra_recortada, '_X_C') == 0
        ) {
            return milDez_rom($letras);
        } elseif (
            strcmp($letra_recortada, '_C') == 0 || strcmp($letra_recortada, '_C_C') == 0
            || strcmp($letra_recortada, '_C_C_C') == 0
            || strcmp($letra_recortada, '_C_D') == 0 || strcmp($letra_recortada, '_D') == 0 ||
            strcmp($letra_recortada, '_D_C') == 0 || strcmp($letra_recortada, '_D_C_C') == 0 || strcmp($letra_recortada, '_D_C_C_C') == 0 || strcmp($letra_recortada, '_CM') == 0
        ) {
            return milCem_rom($letras);
        }
    }
}
