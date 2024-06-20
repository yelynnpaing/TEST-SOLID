<?php

interface Flyable
{
    public function fly();
}

class Bird 
{

}

class Owl extends Bird implements Flyable
{
    public function fly()
    {
        echo "Owl can fly. ";
    }
}

class Cranes extends Bird implements Flyable
{
    public function fly()
    {
        echo "Cranes can fly. ";
    }
}

class Penguin extends Bird
{

}

function makeBirdFly(Flyable $bird)
{
    $bird->fly();
}

$owl = new Owl();
makeBirdFly($owl);
$cranes = new Cranes();
makeBirdFly($cranes);

///to know 
// $penguin = new Penguin();
// makeBirdFly($penguin);