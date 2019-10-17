<?php
use PHPUnit\Framework\TestCase;
use App\Utils\ConvertisseurTexte;

class ConvertisseurTest extends TestCase
{
    public function test_convertion_base2_vers_base10_pour_0()
     {
         $convertisseur = new ConvertisseurTexte();   
         $this->assertequals('0', $convertisseur->convertion('0', '2', '10'));
     }

     public function test_convertion_base2_vers_base10_pour_101()
     {
         $convertisseur = new ConvertisseurTexte();   
         $this->assertequals('5', $convertisseur->convertion('101', '2', '10'));
     }

     public function test_convertion_base2_vers_base10_pour_1111()
     {
         $convertisseur = new ConvertisseurTexte();   
         $this->assertequals('15', $convertisseur->convertion('1111', '2', '10'));
     }

     public function test_convertion_base10_vers_base2_pour_255()
     {
         $convertisseur = new ConvertisseurTexte();   
         $this->assertequals('11111111', $convertisseur->convertion('255', '10', '2'));
     }

     public function test_convertion_base10_vers_base2_pour_110()
     {
         $convertisseur = new ConvertisseurTexte();   
         $this->assertequals('1101110', $convertisseur->convertion('110', '10', '2'));
     }

}
?>