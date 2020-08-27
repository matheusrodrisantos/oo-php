<?php 
class BankAcount
{
    private $balance; 
    
    public function __construct()
    {
        $this->balance=10;
    }
    
    public function getBalance()
    {
        return $this->balance;
    }   

    public function setBalance($value)
    {
        $this->balance+=$value;
    }

    public function deposit($money)
    {
        $this->setBalance($money);
    }

    public function withdraw($money)
    {
        if($money>$this->getBalance())
        {
            return false;            
        }
        $this->setBalance($money*-1);
    }
}

$bankAc=new BankAcount();
print"\nSeu saldo inicial é: ";
print $bankAc->getBalance();
print"\n";

print "\nDepositei 100 ";
$bankAc->deposit(100);
print"\n";

print "Fiquei com ";
print $bankAc->getBalance();
print "\n";

print "Saquei 110";
$bankAc->withdraw(110);
print "\nFiquei com ";
print $bankAc->getBalance();
print "\n";