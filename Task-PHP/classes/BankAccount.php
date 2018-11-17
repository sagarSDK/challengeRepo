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
        //implement this method
      

    }

    public function withdraw(Money $amount)
    {
        
        
    }
}
