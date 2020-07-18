<?php 
/**
 * @author apary
 *
 */
abstract class Vehicle {
    //Fields
	public $engineState;
	public $speed;
	public $engineSize;
	public $vehicleType;
	
	function __construct($VehicleType, $EngineSize) {
	    $this->vehicleType = $VehicleType;
	    $this->engineSize = $EngineSize;
	}
	
	// Setter and getters
    /**
     * @return mixed
     */
    function getEngineState()
    {
        return $this->engineState;
    }

    /**
     * @return mixed
     */
    function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @return mixed
     */
    function getEngineSize()
    {
        return $this->engineSize;
    }

    /**
     * @return mixed
     */
    function getVehicleType()
    {
        return $this->vehicleType;
    }

    /**
     * @param mixed $engineState
     */
    function setEngineState($engineState)
    {
        $this->engineState = $engineState;
    }

    /**
     * @param mixed $speed
     */
    function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @param mixed $engineSize
     */
    function setEngineSize($engineSize)
    {
        $this->engineSize = $engineSize;
    }

    /**
     * @param mixed $vehicleType
     */
    function setVehicleType($vehicleType)
    {
        $this->vehicleType = $vehicleType;
    }
    
    // Abstract Methods
    abstract function startEngine();
    abstract function stopEngine();
    abstract function accelerate();
    abstract function break();
    abstract function showInfo();
    

		
		
} // End of Vehicle class.

class Car extends Vehicle {
    
    
    public function startEngine()
    {
        if ($this->engineState != "ON") {
            $this->engineState = "ON";
            echo "Starting ". $this->getVehicleType() . " engine.";
        } else {
            echo "Engine is already ON";
        }
    }
    
    public function accelerate()
    {
        if ($this->engineState = "ON") {
            $this->speed = "Moving";
            echo "Accelerating ". $this->getVehicleType();
        } else {
            echo $this->getVehicleType() . " is already accelerating";
        }
    }
    
    public function break()
    {
        if ($this->speed = "Moving") {
            $this->speed = "stop";
            echo "This ". $this->getVehicleType() . " is now breaking";
        } else {
            echo $this->getVehicleType() . " is not moving";
        }
    }
    

    public function stopEngine()
    {
        if ($this->speed = "stop") {
            $this->engineState = "OFF";
            echo "Stoping ". $this->getVehicleType() . " engine.";
        } else {
            echo "Engine is already OFF";
        }
    }
    
    public function showInfo()
    {
        
        $this->startEngine();
        echo "<br>";
        $this->accelerate();
        echo "<br>";
        $this->break();
        echo "<br>";
        $this->stopEngine();
        
        
    }

} // End of Car Class

//$car = new Car();
//$car->engineState = "OFF";
//$car->;


class Plane extends Vehicle {
    public function startEngine()
    {
        if ($this->engineState != "ON") {
            $this->engineState = "ON";
            echo "Starting ". $this->getVehicleType() . " engine.";
        } else {
            echo "Engine is already ON";
        }
    }
    
    public function accelerate()
    {
        if ($this->engineState = "ON") {
            $this->speed = "Moving";
            echo "Taking off ". $this->getVehicleType();
        } else {
            echo $this->getVehicleType() . " is already accelerating";
        }
    }
    
    public function break()
    {
        if ($this->speed = "Moving") {
            $this->speed = "stop";
            echo "This ". $this->getVehicleType() . " is now landing";
        } else {
            echo $this->getVehicleType() . " is not moving";
        }
    }
    
    
    public function stopEngine()
    {
        if ($this->speed = "stop") {
            $this->engineState = "OFF";
            echo "Stoping ". $this->getVehicleType() . " engine.";
        } else {
            echo "Engine is already OFF";
        }
    }
    
    public function showInfo()
    {
        
        $this->startEngine();
        echo "<br>";
        $this->accelerate();
        echo "<br>";
        $this->break();
        echo "<br>";
        $this->stopEngine();
        
        
    }

    
} // End of Plane Class

class Boat extends Vehicle {
    public function startEngine()
    {
        if ($this->engineState != "ON") {
            $this->engineState = "ON";
            echo "Starting ". $this->getVehicleType() . " engine.";
        } else {
            echo "Engine is already ON";
        }
    }
    
    public function accelerate()
    {
        if ($this->engineState = "ON") {
            $this->speed = "Moving";
            echo "Accelerating ". $this->getVehicleType();
        } else {
            echo $this->getVehicleType() . " is already accelerating";
        }
    }
    
    public function break()
    {
        if ($this->speed = "Moving") {
            $this->speed = "stop";
            echo "This ". $this->getVehicleType() . " is now breaking";
        } else {
            echo $this->getVehicleType() . " is not moving";
        }
    }
    
    
    public function stopEngine()
    {
        if ($this->speed = "stop") {
            $this->engineState = "OFF";
            echo "Stoping ". $this->getVehicleType() . " engine.";
        } else {
            echo "Engine is already OFF";
        }
    }
    
    public function showInfo()
    {
        
        $this->startEngine();
        echo "<br>";
        $this->accelerate();
        echo "<br>";
        $this->break();
        echo "<br>";
        $this->stopEngine();
        
        
    }

    
} // End of Boat Class

?>