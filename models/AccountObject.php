<?php

class AccountObject
{
    private string $email;
    private string $password;

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($value)
    {
        $this->password = $value;
    }

    public function __construct($each)
    {
        $this->email = $each['email'];
        $this->email = $each['password'];
    }
}
