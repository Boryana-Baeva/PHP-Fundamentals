<?php

abstract class Human
{
    private $firstName;
    private $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    protected function setFirstName($firstName)
    {
        if(!ctype_upper($firstName[0])){
            throw new Exception("Expected upper case letter!Argument: firstName");
        }
        if(strlen($firstName) < 4){
            throw new Exception("Expected length at least 4 symbols!Argument: firstName");
        }
        $this->firstName = $firstName;
    }

    protected function setLastName($lastName)
    {
        if(!ctype_upper($lastName[0])){
            throw new Exception("Expected upper case letter!Argument: lastName");
        }
        if(strlen($lastName) < 3){
            throw new Exception("Expected length at least 3 symbols!Argument: lastName");
        }
        $this->lastName = $lastName;
    }

    public function __toString()
    {
        return 'First Name: ' . $this->getFirstName() . PHP_EOL
                . 'Last Name: ' . $this->getLastName() . PHP_EOL;
    }
}

class Student extends Human
{
    private $facultyNumber;

    public function __construct(string $firstName,
                                string $lastName,
                                string $facultyNumber)
    {
        parent::__construct($firstName, $lastName);
        $this->setFacultyNumber($facultyNumber);
    }

    public function getFacultyNumber()
    {
        return $this->facultyNumber;
    }

    protected function setFacultyNumber($facultyNumber)
    {
        if(strlen($facultyNumber) < 5 || strlen($facultyNumber) > 10){
            throw new Exception("Invalid faculty number!");
        }
        $this->facultyNumber = $facultyNumber;
    }

    public function __toString()
    {
        return parent::__toString()
                        . 'Faculty number: ' . $this->getFacultyNumber()
                        . PHP_EOL;

    }
}

class Worker extends Human
{
    private $salaryPerWeek;
    private $workingHours;
    private $salaryPerHour;

    public function __construct(string $firstName,
                                string $lastName,
                                float $salaryPerWeek,
                                float $workingHours)
    {
        parent::__construct($firstName, $lastName);
        $this->setLastName($lastName);
        $this->setSalaryPerWeek($salaryPerWeek);
        $this->setWorkingHours($workingHours);
        $salaryPerHour = $this->salaryPerWeek / ( 7  * $this->workingHours);
        $this->setSalaryPerHour($salaryPerHour);
    }

    // Getters
    public function getSalaryPerHour()
    {
        return number_format($this->salaryPerHour, 2, '.', '');
    }

    public function getSalaryPerWeek()
    {
        return number_format($this->salaryPerWeek, 2, '.', '');
    }

    public function getWorkingHours()
    {
        return number_format($this->workingHours, 2, '.', '');
    }

    //Setters
    protected function setLastName($lastName)
    {
        if(strlen($lastName) <= 3){
            throw new Exception("Expected length more than 3 symbols!Argument: lastName");
        }
        parent::setLastName($lastName);
    }

    protected function setSalaryPerWeek($salaryPerWeek)
    {
        if($salaryPerWeek <= 10){
            throw new Exception("Expected value mismatch!Argument: weekSalary");
        }
        $this->salaryPerWeek = $salaryPerWeek;
    }

    protected function setWorkingHours($workingHours)
    {
        if($workingHours < 1 || $workingHours > 12){
            throw new Exception("Expected value mismatch!Argument: workHoursPerDay");
        }
        $this->workingHours = $workingHours;
    }

    protected function setSalaryPerHour($salaryPerHour)
    {
        $this->salaryPerHour = $salaryPerHour;
    }

    public function __toString()
    {
        return parent::__toString() . 'Week Salary: ' . $this->getSalaryPerWeek() . PHP_EOL
                                    . 'Hours per day: ' . $this->getWorkingHours() . PHP_EOL
                                    . 'Salary per hour: ' . $this->getSalaryPerHour(). PHP_EOL;
    }
}


$studentInfo = explode(' ', trim(fgets(STDIN)));
list($studentFirstName, $studentLastName, $facultyNumber) =
    [$studentInfo[0], $studentInfo[1], $studentInfo[2]];

$workerInfo = explode(' ', trim(fgets(STDIN)));
list($workerFirstName, $workerLastName, $salaryPerWeek, $workingHours) =
    [$workerInfo[0], $workerInfo[1], $workerInfo[2], $workerInfo[3]];

try{
    $student = new Student($studentFirstName, $studentLastName, $facultyNumber);
    $worker = new Worker($workerFirstName, $workerLastName, $salaryPerWeek, $workingHours);

    echo $student . PHP_EOL . $worker;

} catch (Exception $e){
    echo $e->getMessage();
}