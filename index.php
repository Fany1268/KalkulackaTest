<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        //není index, ale vytvorený file přímo pro unic test v php stormu
       
        //KalkulackaTest.php
      
require_once('kalkulacka.php');
use PHPUnit\Framework\TestCase;

class KalkulackaTest extends TestCase
{
    public function testScitani()
    {


        $kalku = new kalkulacka();


        $this->assertEquals(5, $kalku->secti(2, 3));
        $this->assertEquals(-3, $kalku->secti(-7, 4));
    }

    public function testOdecitani()
    {

        $odecet = new kalkulacka();

        $this->assertEquals(1.5, $odecet->odecti(3, 1.5));
    }

    public function testNasobeni()
    {

        $nasob = new kalkulacka();

        $this->assertEquals(10, $nasob->nasob(2, 5));
    }

    public function testDeleni()
    {

        $vydel = new kalkulacka();

        $this->assertEquals(10, $vydel->deleni(20, 2));
    }

}

        ?>
    </body>
</html>
