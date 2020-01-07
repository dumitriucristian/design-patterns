<h3>Definition:</h3>
<p>Factory method is a creational design pattern which solves the problem of creating product objects without specifying their concrete classes.</p>

<h3>Problem:</h3>
<p>Hardcoded object type</p>

<h3>Solution:</h3>
<p>Replace direct object construction with calls toa a special factory method</p>

<h3>A spaceship game require many type of asteroids with n size's and collors.</h3>

<?php

  //concrete prod 1
  class Asteroid
  {

      private $size;
      private $speed;

      //bigger means faster
      const SPEED_COEFICIENT = 2;

      public function __construct( $size )
      {
          $this->size = $size;
          $this->speed = $this->setSpeed();

      }

      private function setSpeed()
      {
          return $this->size * self::SPEED_COEFICIENT;
      }

      public function getSpeed()
      {
          return  $this->speed;
      }

  }

  //concrete product 2
   class Spaceship
   {
        private $size;
        private $speed;

        //bigger means slower
        const SPEED_COEFICIENT = 0.5;

        public function __construct($size)
        {
            $this->size = $size;
            $this->speed = $this->setSpeed();

        }
        private function setSpeed()
        {
           return  $this->size * self::SPEED_COEFICIENT;
        }

       public function getSpeed()
       {
           return $this->speed;
       }
   }


   interface SpaceFactory
   {
       public function createSpaceObject(  $size);
   }


   class SpaceShipFactory implements SpaceFactory
   {
       public function createSpaceObject( $size)
       {

             return  new Spaceship($size) ;

       }

   }

      class AsteroidFactory implements SpaceFactory
      {
          public function createSpaceObject( $size)
          {

              return  new Asteroid($size) ;

          }
      }




        $asteroidFactory = new AsteroidFactory ();
        $asteroid = $asteroidFactory->createSpaceObject(50);


        var_dump($asteroid);





