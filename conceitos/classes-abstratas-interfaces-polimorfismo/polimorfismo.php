<?php 
/* Polimorfismo de sobreposição
Na programação Orientação a Objetos existem dois tipos de polimorfimso, Polimorfismo de sobreposição e de sobrecarga.
No PHP é possível implementar apenas o polimorismo de sobreposição, que faz o uso de uma classe mãe que tem um método padrão, 
e nas classes filhas tem um método com o mesmo nome, podendo ter assinaturas diferentes. 
*/
// casse mãe 
class Printer
{
    public function toPrint()
    {
        return  "Priting data ...\n";
    }
}

class HpPrinter extends Printer
{
    public function toPrint()
    {
        return "Hp printing data...\n";
    }
}

class EpsonPrinter extends Printer
{
    public function toPrint()
    {
        return "Epson printing data...\n";
    }
}

$printer = new EpsonPrinter();
print $printer->toPrint();