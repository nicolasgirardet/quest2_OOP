<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    // Constante de "Car":

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    // Paramètres / attributs de "Car" :

    private string $energy;
    private int $energyLevel;

    // Constructor de "Car" : 

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    // Méthodes de "Car" :

    public function start(): string 
    {
        $this->currentSpeed = 0;
        return "I start the car.";
    }

    // Getters and setters de "Car":

    public function getEnergy(): string 
    {
        return $this->energy;
    }

    public function setEnergy(string $energy) : Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) 
        {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

}