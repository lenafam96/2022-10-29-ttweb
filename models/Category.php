<?php

require_once 'models/Connect.php';
require 'models/CategoryObject.php';

class Category
{
    public function all()
    {
        $sql = "select * from categories";
        $result = (new Connect())->excuteQuery($sql);

        $arr = [];
        foreach ($result as $each) {
            $object = new CategoryObject($each);

            $arr[] = $object;
        }

        return $arr;
    }

    public function create($params1): void
    {
        $object = new CategoryObject($params1);
        $sql = "insert into categories (category_name)
        values('" . $object->getCategoryName() . "')";
        (new Connect())->excuteNonQuery($sql);
    }
    public function update($params1): void
    {
        $object = new CategoryObject($params1);
        $sql = "update categories set category_name = '" . $object->getCategoryName() . "' where category_id = " . $object->getCategoryId();
        (new Connect())->excuteNonQuery($sql);
    }

    public function delete($id): void
    {
        $sql = "delete from categories where category_id = " . $id;
        (new Connect())->excuteNonQuery($sql);
    }

    public function find($id): object
    {
        $sql = "select * from categories where category_id = $id";
        $result = (new Connect())->excuteQuery($sql);
        $each = mysqli_fetch_array($result);
        return new CategoryObject($each);
    }
}
