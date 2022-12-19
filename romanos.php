<?php
require_once('conversor_romanos.php');
require_once('index.php');

class Romano
{
    public $unidades = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX'];
    public $dezenas = ['X', 'XX', 'XXX', 'XL', 'L', 'LX', 'LXX', 'LXXX', 'XC'];
    public $centenas = ['C', 'CC', 'CCC', 'CD', 'D', 'DC', 'DCC', 'DCCC', 'CM'];
    public $milhas = ['M', 'MM', 'MMM', ' I̅V̅', 'V̅', ' V̅I̅', ' V̅I̅I̅', ' V̅I̅I̅I̅', 'I̅X̅'];
    public $milhas_dez = ['X̅', 'X̅X̅', 'X̅X̅X̅', 'X̅L', '__L', '__LI', '__LII', '__LIII', '__XC'];
    public $milhas_cem = ['__C', '__CC', '__CCC', '__CD', '__D', '__DC', '__DCC', '__DCCC', '__CM'];

    function conv_romanos($numero)
    {


        if ($numero < 0) {
            echo "<br><br>" . "<b>" . "Não é possível 
            transformar numeros negativos e zero
            em um números romanos!" .
                "</b>" . "<br>";
            exit;
        } elseif (strlen($numero) == 1) {
            return  unidade($numero);
        } elseif (strlen($numero) == 2) {
            return dezena($numero);
        } elseif (strlen($numero) == 3) {
            return centena($numero);
        } elseif (strlen($numero) == 4) {
            return milha($numero);
        } elseif (strlen($numero) == 5) {
            return milha_dez($numero);
        } elseif (strlen($numero) == 6) {
            return milha_cem($numero);
        } else
            echo "<h1>" . "O limite do conversor é de números com até 6 dígitos!" . "</h1>";
    }
}
