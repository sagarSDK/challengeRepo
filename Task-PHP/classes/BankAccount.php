<?php

class BankAccount implements IfaceBankAccount
{

    private $balance = null;

    public function __construct(Money $openingBalance)
    {
        $this->balance = $openingBalance->value();
    }

    public function balance()   
    {
        return $this->balance;
    }

    public function deposit(Money $amount)
    {
        $bal = $this->balance();
         $amt = $amount->value();
         $tbal = $bal + $amt;
        return $this->balance = $tbal;        
         

    }

    public function transfer(Money $amount, BankAccount $account)
    {
        $bal =  $this->balance();
        $amt =  $amount->value();
        $accbal =  $account->balance();
        if($bal < $amt)
         {
            throw new Exception("Withdrawl amount larger than balance");     
            return false;                  
         }
         else{
            $tbal = $bal - $amt;
            $this->balance = $tbal;

        //credit to
        $accbal =  $account->balance();       
        $acctbal = $accbal + $amt;
        $account->balance = $acctbal;
         }

    }

    public function withdraw(Money $amount)
    {
        
        
    }
}
