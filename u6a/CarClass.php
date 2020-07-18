<?php 

require ('VehicleClass.php');
class Car extends Vehicle {
    
    protected function startEngine()
    {
        if ($this->engineState != "ON") {
            $this->engineState = "ON";
            return "Starting ". $this->getVehicleType() . "engine.";
        } else {
            return "Engine is already ON";
        }
        
    }
    

    public function showInfo()
    {
        $info .= "The Car is " . $this->engineState;
        $info .= "The Car is going " . getSpeed() . "mph";
        $info .= "The Car is a " . getVehicleType();
        return $info;
        
        
    }

    protected function break($newSpeed)
    {
        $this->setSpeed(0);
        if($this->speed != 0) {
            echo "The car didn't stop you are gonnen crash";
        } else {
            echo "The car break are working just fine";
        }
        
        
    }

    protected function accelerate($newSpeed)
    {
        
        $currentSpeed = $this->getSpeed();
        $newSpeed = $currentSpeed + 10;
        
        $this->setSpeed($newSpeed);
        $body = "The speed of the car is now" . $newSpeed . "mph";
        
    }

    protected function stopEngine()
    {
        if ($this->engineState != "OFF") {
            $this->engineState = "OFF";
            echo "Stopping ". $this->getVehicleType() . "engine.";
        } else {
            echo "Engine is already OFF";
        }
    }

    
}

?>