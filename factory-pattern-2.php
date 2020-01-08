<h3>Definition:</h3>
<p>Factory method is a creational design pattern which solves the problem of creating product objects without specifying their concrete classes.</p>

<h3>Problem:</h3>
<p>Hardcoded object type</p>

<h3>Solution:</h3>
<p>Replace direct object construction with calls toa a special factory method</p>

<h3>A spaceship game require many type of spaceships with n size's and collors.</h3>

<?php
/*

FactorySpaceShip sa devina CreatorSpaceShip si sa contina o proprietate publica de tip interfata IShip pe care sa il returnezi intr-o metoda createSpaceShip()
Faci inca urmatoarele clase:
CreateTransportSpaceShip,
CreateWarSpaceShip, CreateResearchSpaceShip
unde mostenesti din clasa abstracta CreatorSpaceShip si intorci un nou obiect te tipul clasei respective
( CreateTransportSpaceShip, CreateWarSpaceShip, CreateResearchSpaceShip in functie de caz)
Redenumeste interfata Ship in IShip, e mai usor de localizat intr-un proiect mare
 */
abstract class CreatorSpaceShip
{
    public $shipType;


    abstract public function createSpaceShip($shipType) : IShip ;

}

class CreateResearchSpaceShip extends CreatorSpaceShip
{

    public function createSpaceShip($shipType) : IShip
    {
      return $shipType;
    }
}

class CreateWarSpaceShip extends CreatorSpaceShip
{

    public function createSpaceShip($shipType) : IShip
    {
        return $shipType;
    }
}

class CreateTransportSpaceShip extends CreatorSpaceShip
{

    public function createSpaceShip($shipType) : IShip
    {
        return $shipType;
    }
}



interface IShip
{
    //some common ship method;
    public function getShipType($shipType);
}


class TransportSpaceShip implements IShip
{
    private $speed = 5;
    private $distance = 5;

    public function transport( $qty )
    {
        echo 'I am transporting this amount of merchandise ' . $qty ;
    }

    public function fly(){
        echo "Transport ship flew. ". $this->distance . "years light" ;
    }

    public function getShipType($shipType){
        return $shipType;
    }
}

class WarSpaceShip implements IShip
{
    private $speed = 10;
    private $distance = 15;
    public function fire( $nrOfMisiles )
    {
        echo 'I am firing towards enemyes this amount of missilles ' . $nrOfMisiles ;
    }

    public function fly(){
        echo "War ship flew. ". $this->distance . "years light" ;
    }
    public function getShipType($shipType){
        return $shipType;
    }

}

class ResearchSpaceShip implements IShip
{
    private $speed = 8;
    private $distance = 8;

    public function scan( $nrOfPlanets )
    {
        echo 'I am scanning ' . $nrOfPlanets . ' planets';
    }

    public function fly(){
        echo "Research ship flew. ". $this->distance . "years light" ;
    }
    public function getShipType($shipType){
        return $shipType;
    }

}

$builder = new CreateResearchSpaceShip('Research');
var_dump($builder);








