<?php

class User 
{
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

class UserRepository
{
    public function saveFile()
    {
        echo "Users datas are save to database.  ";
    }
}

class EmailService
{
    public function sendEmail($email, $message)
    {
        echo "email is send to " . $email . " : " . $message;
    }
}

$userOne = new User("kyaw Kyaw", "kyaw@gmail.com");
$userRpository = new UserRepository();
$userRpository->saveFile();
$emialService = new EmailService();
$emialService->sendEmail($userOne->getEmail(), "Hello...");
