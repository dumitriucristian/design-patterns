<h3>Definition:</h3>
<p>Factory method is a creational design pattern which solves the problem of creating product objects without specifying their concrete classes.</p>

<h3>Problem:</h3>
<p>Hardcoded object type</p>

<h3>Solution:</h3>
<p>Replace direct object construction with calls toa a special factory method</p>

<h3>A spaceship game require many type of spaceships with n size's and collors.</h3>

<?php

    class FactorySpaceShips
    {
        public function buildSpaceShips( $type )
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

        private function buildWarSpaceShip()
        {
           return  new WarSpaceShip();
        }

        private function buildTransportSpaceShip()
        {
           return   new TransportSpaceShip();
        }

        private function buildResearchSpaceShip()
        {
           return  new ResearchSpaceShip();
        }

    }

   class TransportSpaceShip
   {
        private $speed = 5;

        public function transport( $qty )
        {
           echo 'I am transporting this amount of merchandise ' . $qty ;
        }
   }

   class WarSpaceShip
   {
       private $speed = 10;

       public function fire( $nrOfMisiles )
       {
           echo 'I am firing towards enemyes this amount of missilles ' . $nrOfMisiles ;
       }
   }

   class ResearchSpaceShip
   {
       private $speed = 8;

       public function scanning( $nrOfPlanets )
       {
           echo 'I am scanning ' . $nrOfPlanets . ' planets';
       }
   }


   $factory = new FactorySpaceShips();

   $researchShip = $factory->buildSpaceShips('research');
   $researchShip->scanning(5);







