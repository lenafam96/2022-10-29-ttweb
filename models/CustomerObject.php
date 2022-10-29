<?php

class CustomerObject
{
    private int $customerId;
    private string $customerName;
    private int $gender;
    private string $address;
    private string $phone;
    private string $email;

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function setCustomerId($value)
    {
        $this->customerId = $value;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

    public function setCustomerName($value)
    {
        $this->customerName = $value;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function showGender()
    {
        return $this->gender === 0 ? "Nam" : "Nữ";
    }

    public function setGender($value)
    {
        $this->gender = $value;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($value)
    {
        $this->address = $value;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($value)
    {
        $this->phone = $value;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function __construct($each)
    {
        $this->customerId = $each['customer_id'] ?? -1;
        $this->customerName = $each['customer_name'];
        $this->gender = $each['gender'] ?? 0;
        $this->address = $each['address'];
        $this->phone = $each['phone'];
        $this->email = $each['email'];
    }
}
