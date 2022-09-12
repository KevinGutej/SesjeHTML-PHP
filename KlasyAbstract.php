<?php

abstract class BankAccount
{
    protected float $interestRate;
    protected float $balance;
    public function setInterestRate(float $newInterestRate)
    {
        $this->interestRate = $newInterestRate; 
    }
    public abstract function payOut(float $amount);
    
}
class PersonalAccount extends BankAccount
{
    public function payOut(float $amount)
    {
        if($amount <= 50 && $amount >= 0) {
            $this->balanace = $this->balance - $amount - 1;
        } else {
           $this->balance = $this->balance - $amount - $this->interestRate * $amount;
        }
    }
}