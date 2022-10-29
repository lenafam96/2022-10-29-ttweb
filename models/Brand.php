<?php

require_once 'models/Connect.php';
require 'models/BrandObject.php';

class Brand
{
    public function all()
    {
        $sql = "select * from brands";
        $result = (new Connect())->excuteQuery($sql);

        $arr = [];
        foreach ($result as $each) {
            $object = new BrandObject($each);

            $arr[] = $object;
        }

        return $arr;
    }

    public function create($params1): void
    {
        $object = new BrandObject($params1);
        $sql = "insert into brands (brand_name)
        values('" . $object->getBrandName() . "')";
        (new Connect())->excuteNonQuery($sql);
    }
    public function update($params1): void
    {
        $object = new BrandObject($params1);
        $sql = "update brands set brand_name = '" . $object->getBrandName() . "' where brand_id = " . $object->getBrandId();
        (new Connect())->excuteNonQuery($sql);
    }

    public function delete($id): void
    {
        $sql = "delete from brands where brand_id = " . $id;
        (new Connect())->excuteNonQuery($sql);
    }

    public function find($id): object
    {
        $sql = "select * from brands where brand_id = $id";
        $result = (new Connect())->excuteQuery($sql);
        $each = mysqli_fetch_array($result);
        return new BrandObject($each);
    }
}
