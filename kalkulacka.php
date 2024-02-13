<?php

//nevím proč se psala třída malým písmem a ne Kalkulacka.php, ale na školení to v php stormu fungovalo

class kalkulacka
{
    /**
     * @param $cislo1
     * @param $cislo2
     * @return mixed
     */

    /**
     * Vypočítá součet x a y
     * @param $cislo1 proměná x
     * @param $cislo2 proměná y
     * @return mixed
     */
    public function secti($cislo1, $cislo2)
    {
        return $cislo1 + $cislo2;
    }

    /**
     *
     * @param $cislo1
     * @param $cislo2
     * @return mixed
     */
    public function odecti($cislo1, $cislo2)
    {
        return $cislo1 - $cislo2;
}

public function nasob($cislo1, $cislo2)
{

        return $cislo1 * $cislo2;
}

public function deleni($cislo1, $cislo2)
{
    return $cislo1 / $cislo2;
}


}



/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

