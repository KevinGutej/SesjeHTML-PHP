<?php

class Doctor
{
    protected int $earning;

    public function Heal()
    {
        echo "Healing in process...." . PHP_EOL;
    }

    public function __construct(int $income)
    {
        $this->earning = $income;
    }
}
class Dentist extends Doctor
{
    public function Heal()
    {
        echo "Fixing teeth...." . PHP_EOL;
        $this->PrintEarning();
    }
    private function PrintEarning()
    {
        echo $this->earning;
    }
}
class Surgeon extends Doctor
{
    public function Heal()
    {
        echo "Surgery in progress...." . PHP_EOL;
    }
}
$kevin = new Dentist(1200);
$kevin->Heal();



class Vehicle
{
    public int $speed;
    public int $cost;
    public string $color;

    public function SpeedingUp()
    {
        echo "The car is speeding up..." . PHP_EOL;
    }
    protected function SlowingDown()
    {
        echo "The car is slowing down..." . PHP_EOL;
    }
}
class Car extends Vehicle
{
}
class Ship extends Vechicle
{
}
// =================================================================================================================================================
<?php
interface Managable
{
    function pay();
    function setName(string $newName);
}
class Administrator implements Managable
{
    private string $name;
    private float $accountBalance  = 0;
    public function setName(string $newName)
    {
        $this->name = $newName;
    }
    public function pay()
    {
        $this->accountBalance += 10000;
    }
    public function __toString()
    {
        return $this->name . PHP_EOL . $this->accountBalance . PHP_EOL;
    }
}

class Advertiser implements Managable
{
    private string $newName;
    private string $lastName;
    private float $accountBalance  = 0;
    public function setName(string $newName)
    {
        $SplitName = explode(' ', $newName);
        $this->newName = $SplitName[0];
        $this->lastName = $SplitName[1];
    }
    public function pay()
    {
        $this->accountBalance += 1000;
    }
    public function __toString()
    {
        return $this->newName . PHP_EOL . $this->lastName . PHP_EOL . $this->accountBalance . PHP_EOL;
    }
}

class User implements Managable
{
    private string $name;
    private float $accountBalance = 0;
    public function setName(string $newName)
    {
        $this->name = $newName;
    }
    public function pay()
    {
        $this->accountBalance += 10;
    }
    public function __toString()
    {
        return $this->name . PHP_EOL . $this->accountBalance . PHP_EOL;
    }
}

function nameChooser(Managable $user, string $names)
{
    $user->setName($names);
    echo $user;
}

$user = new User();
nameChooser($user, "Kevin");
$admin = new Administrator();
nameChooser($admin, "Bob");
$advertisor = new Advertiser();
nameChooser($advertisor, "Jonny Smith");