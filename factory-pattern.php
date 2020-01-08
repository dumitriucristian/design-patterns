<h3>Definition:</h3>
<p>Factory method is a creational design pattern which solves the problem of creating product objects without specifying their concrete classes.</p>

<h3>Problem:</h3>
<p>Hardcoded object type</p>

<h3>Solution:</h3>
<p>Replace direct object construction with calls toa a special factory method</p>

<h3>A spaceship game require many type of spaceships with n size's and collors.</h3>

<?php

    abstract class FactorySpaceShip
    {

      /*  private function buildSpaceShips( $type )
        {
            if ($type == 'war') {
               $ship = $this->buildWarSpaceShip() ;
            }

            if ($type == 'transport') {
               $ship = $this->buildTransportSpaceShip() ;
            }

            if ($type == 'research') {
               $ship = $this->buildResearchSpaceShip() ;
            }
              return $ship;
        }
        */


        private function buildTransportSpaceShip()
        {
           return   new TransportSpaceShip();
        }

        abstract public function build() : Ship ;

    }

    class BuildResearchShip extends FactorySpaceShip
    {

        public function build() : Ship
        {
            //...... a lot of things that build a ship
            return new ResearchSpaceShip();
        }
    }

    class BuildWarShip extends FactorySpaceShip
    {

        public function build() : Ship
        {
            //...... a lot of things that build a ship
            return new WarSpaceShip();
        }
    }



   interface Ship
   {
       //some common ship method;
       public function fly();
   }


   class TransportSpaceShip implements Ship
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
   }

   class WarSpaceShip implements Ship
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

   }

   class ResearchSpaceShip implements Ship
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

   }

    $builder = new BuildResearchShip();
    $ship = $builder->build();
    $ship->fly();

    $builder = new BuildWarShip();
    $ship = $builder->build();
    $ship->fly();




