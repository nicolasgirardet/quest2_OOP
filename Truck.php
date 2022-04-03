<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    // Paramètres / attributs de "Truck":

    private int $maxLoad;

    private int $currentLoad = 0;

    // Constructor de "Truck":

    public function __construct(string $color, int $nbSeats, string $energy, int $maxLoad)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->maxLoad = $maxLoad;
    }

    // Getters & setters de "Truck":

    public function getMaxLoad(): int 
    {
        return $this->maxLoad;
    }

    public function setMaxLoad(int $maxLoad): void
    {
        $this->maxLoad = $maxLoad;
    }

    public function getCurrentLoad(): int 
    {
        return $this->currentLoad;
    }

    public function setCurrentLoad(int $currentLoad): void
    {
        $this->currentLoad = $currentLoad;
    }

    // Méthodes de "Truck":

    public function isFull(): string
    {
        if($this->currentLoad < $this->maxLoad)
        {
            return "Le camion est : in filling.";
        }
        else 
        {
            return "Le camion est : full.";
        }
    }

    public function start(): string 
    {
        $this->currentSpeed = 0;
        return "I start the truck.";
    }

}