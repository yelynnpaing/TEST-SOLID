<?php 

interface Workable
{
    public function work();
}

interface Eatable
{
    public function eat();
}

class HumanWorker implements Workable, Eatable
{
    public function work()
    {
        echo "Human can work. ";
    }

    public function eat()
    {
        echo "Human can eat. ";
    }
}

class RobotWorker implements Workable
{
    public function work()
    {
        echo "Robot can work.";
    }
}


$humanworker = new HumanWorker();
$humanworker->work();
$humanworker->eat();

$robotWorker = new RobotWorker();
$robotWorker->work();