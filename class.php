<?php

class Fruit
{
    // Properties
    public $name;
    public $color;
    private $name_private;
    protected $name_protected;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    // Methods
    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }

    function set_color($color)
    {
        $this->color = $color;
    }

    function get_color()
    {
        return $this->color;
    }

    public function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }

    function __destruct()
    {
        echo "The fruit is {$this->name}.";
    }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit
{
    public function message()
    {
        echo "Am I a fruit or a berry? ";
    }
}

$apple = new Fruit('Apple', 'Red');
//$apple->set_name('Apple');
//$apple->set_color('Red');
//echo "Name: " . $apple->get_name();
//echo "<br>";
//echo "Color: " . $apple->get_color();

//$strawberry = new Strawberry("Strawberry", "red");
//$strawberry->message();
//$strawberry->intro();

// constructor promotion
//class BankAccount
//{
//    function __construct(private $accountNumber, private $balance)
//    {
//    }
//}


class BankAccount
{
    private $balance;

    public function __construct($balance)
    {
        $this->balance = $balance;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }

        return $this;
    }
}

class SavingAccount extends BankAccount
{
    private $interestRate;

    public function __construct($balance, $interestRate)
    {
        parent::__construct($balance);
        $this->interestRate = $interestRate;
    }

    public function setInterestRate($interestRate)
    {
        $this->interestRate = $interestRate;
    }

    public function addInterest()
    {
        $interest = $this->interestRate * $this->getBalance();
        $this->deposit($interest);
    }
}

$account = new SavingAccount(100, 0.05);
$account->addInterest();
echo $account->getBalance();


