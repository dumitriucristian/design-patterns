<?php

interface Ship
{
    public function fly();

}

class SlowShip implements Ship
{
    public function fly()
    {
        echo 'I am flying slow ';
    }
}

class FastShip implements Ship
{
    public function fly()
    {
        echo 'I am flying fast ';
    }
}

interface ShipFactory
{

    public function createShip(): Ship;
}

class SlowShipFactory implements ShipFactory
{

    private $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function createShip(): Ship
    {
        return new SlowShip();
    }
}

class FastShipFactory implements ShipFactory
{
    public function createShip(): Ship
    {
        return new FastShip();
    }
}

$slowShipFactory = new  SlowShipFactory('green') ;
$ship1 = $slowShipFactory->createShip();
$ship1 = $slowShipFactory->createShip();
