<?php

require_once 'models/Connect.php';
require 'models/CustomerObject.php';

class Customer
{
    public function all()
    {
        $sql = "select * from customers";
        $result = (new Connect())->excuteQuery($sql);

        $arr = [];
        foreach ($result as $each) {
            $object = new CustomerObject($each);

            $arr[] = $object;
        }

        return $arr;
    }

    public function create($params1): void
    {
        $object = new CustomerObject($params1);
        $sql = "insert into customers (customer_name,gender,address,phone,email)
        values('" . $object->getCustomerName() . "','" . $object->getGender() . "','" . $object->getAddress() . "','" . $object->getPhone() . "','" . $object->getEmail() . "')";
        (new Connect())->excuteNonQuery($sql);
    }
    public function update($params1): void
    {
        $object = new CustomerObject($params1);
        $sql = "update customers set customer_name = '" . $object->getCustomerName() . "', gender = " . $object->getGender() . ", address = '" . $object->getAddress() . "', phone = '" . $object->getPhone() . "', email = '" . $object->getEmail() . "' where customer_id = " . $object->getCustomerId();
        (new Connect())->excuteNonQuery($sql);
    }

    public function delete($id): void
    {
        $sql = "delete from customers where customer_id = " . $id;
        (new Connect())->excuteNonQuery($sql);
    }

    public function find($id): object
    {
        $sql = "select * from customers where customer_id = $id";
        $result = (new Connect())->excuteQuery($sql);
        $each = mysqli_fetch_array($result);
        return new CustomerObject($each);
    }
}
