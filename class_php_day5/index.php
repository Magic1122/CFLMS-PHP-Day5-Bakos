<!-- Create a simple Class called Vehicles. This Class should have the properties: name, model, makeYear, color, fuelType. Use a constructor. Create a method which will return the name and the model of this vehicle. 

Instantiate 3 new objects from this Class. 

Once you have done creating these objects, create a new Class called Ships. This Class will extend the Vehicles Class. Add new properties and methods to this Class.

Instantiate 3 new objects from this Class. 

 -->


 <?php

use function PHPSTORM_META\type;

class Vehicle {
        
        function __construct($name, $model, $makeYear, $color, $fuelType) {
            $this->name = $name;
            $this->model = $model;
            $this->makeYear = $makeYear;
            $this->color = $color;
            $this->fuelType = $fuelType;
        }

        public function getInfo() {
            return "Vehicle name: " . $this->name . "<br>Vehicle Model: " . $this->model . "<br>";
        }
    }

    $car1 = new Vehicle('Opel', 'Astra GTC J', 2014, 'black', 'benzin');
    $car2 = new Vehicle('Tesla', 'Model 3', 2018, 'white', 'electric');
    $car3 = new Vehicle('Porche', '911 Carrera', 1984, 'black', 'benzin');


    echo $car1->getInfo();
    echo $car2->getInfo();
    echo $car3->getInfo();



    class Ship extends Vehicle {

        function __construct($name, $model, $makeYear, $color, $fuelType, $type) {
            parent::__construct($name, $model, $makeYear, $color, $fuelType);
            $this->type = $type;
        }


        public function usedFor() {
            if ($this->type == 'military') {
                return "<br>Used for military purposes<br>";
            } elseif ($this->type == 'cruiser') {
                return '<br>Used for transporting people in a fancy way<br>';
            }
        }
    }

    $ship1 = new Ship('Ship', 'Some model', ' 2000', 'marine', 'cherozin', 'cruiser');
    $ship2 = new Ship('WarShip', 'Some model', ' 2000', 'camouflage', 'cherozin', 'military');

    echo $ship1->usedFor();
    echo $ship2->usedFor();


 ?>