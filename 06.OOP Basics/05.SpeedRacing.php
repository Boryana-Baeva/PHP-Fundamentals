<?php

class Car
{
    private $model;
    private $fuelAmount;
    private $fuelCostFor1km;
    private $distanceTraveled;

    function __construct(string $model, float $fuelAmount, float $fuelCostFor1km)
    {
        $this->model = $model;
        $this->fuelAmount = $fuelAmount;
        $this->fuelCostFor1km = $fuelCostFor1km;
        $this->distanceTraveled = 0;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function drive(float $distance)
    {
        $fuelUsed = round($distance * $this->fuelCostFor1km, 2);
        if ($fuelUsed <= $this->fuelAmount) {
            $this->fuelAmount -= $fuelUsed;
            $this->distanceTraveled += $distance;

        } else {
            echo "Insufficient fuel for the drive" . PHP_EOL;
        }
    }

    public function __toString()
    {
        return $this->model . ' ' . number_format($this->fuelAmount , 2) . ' ' . $this->distanceTraveled . PHP_EOL;
    }
}

$numberOfCars = intval(trim(fgets(STDIN)));
$cars = [];
for ($i = 0; $i < $numberOfCars; $i++) {
    $carInfo = explode(" ", trim(fgets(STDIN)));
    list($model, $fuelAmount, $fuelCostFor1km) = [$carInfo[0], floatval($carInfo[1]), floatval($carInfo[2])];

    $car = new Car($model, $fuelAmount, $fuelCostFor1km);
    $cars[] = $car;
}

while (true) {
    $commandLine = trim(fgets(STDIN));

    if ($commandLine == "End") {
        break;
    }
    $commandLine = explode(" ", $commandLine);
    list($carModel, $distanceTraveled) = [$commandLine[1], $commandLine[2]];

    foreach ($cars as $car) {
        if ($carModel == $car->getModel()) {
            $car->drive($distanceTraveled);
        }
    }
}

foreach ($cars  as $car){
    echo $car->__toString();
}
