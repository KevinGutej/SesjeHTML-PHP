<?php

class Car
{
    private int $Speed;
    private string $Model;
    private float $Price;

    public function __construct(string $brand = "Audi R8",int $velocity = 160)
    {
        $this->Speed = $velocity;
        $this->Model = $brand;
    }
    public function __toString()
    {
        return "The speed of your car is: $this->Speed and the model is: $this->Model";
    }
    public function getPrice()
    {
        return $this->Price;
    }
    public function setPrice(float $cost)
    {
        $this->Price = $cost;
    }
}
$Audi = new Car("Audi R8",200);
echo $Audi;


//==================================================================================================================================================


class Animal
{
    public string $location;
    public int $max_speed;
    public string $food_type;

    function eat()
    {
        echo "The Animal you have chosen eats: " . $this->food_type;
    }
}


$lion = new Animal();
$lion->location = "Sahara";
$lion->max_speed = 100;
$lion->food_type = "Meat";

$whale = new Animal();
$whale->location = "Ocean";
$whale->max_speed = 60;
$whale->food_type = "Fish";


echo "The speed of your animal is: " . $lion->max_speed . PHP_EOL;
echo "The speed of your animal is: " . $whale->max_speed . PHP_EOL;
$whale->eat();
$lion->eat();


//==================================================================================================================================================


class Song
{
    private string $title;
    private int $playbackSpeed;
    private string $author;

    public function play()
    {
        echo "The name of this song is: " . $this->title;
        echo "The author of this song is: " . $this->author;
    }
    public function speedUP()
    {
        $this->playbackSpeed = $this->playbackSpeed * 2;
    }
    public function slowDown()
    {
        $this->playbackSpeed = $this->playbackSpeed / 2;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    public function setAuthor(string $author)
    {
        $this->author = $author;
    }
}
$ShapeOfYou = new Song();
$ShapeOfYou->setTitle("Shape of you");
$ShapeOfYou->setAuthor("Ed Sheeran");
$ShapeOfYou->play();


//==================================================================================================================================================


class Client
{
    private string $name;
    private int $age;
    private float $accountBalance;

    public function withdraw()
    {
        if($this->accountBalance >= 50)
        {
            $this->accountBalance = $this->accountBalance - 50;
        }
    }
    public function getAccountBalance()
    {
        return $this->accountBalance;
    }
    public function setAccountBalance(float $moneyIn)
    {
        $this->accountBalance = $moneyIn;
    }
    public function __toString()
    {
        return $this->accountBalance;
    }
}
$User1 = new Client();
$User1->setAccountBalance(200);
$User1->withdraw();
echo $User1;


//==================================================================================================================================================
