<?php

require_once 'models/Connect.php';
require 'models/ProductObject.php';

class Product
{
    public function all($sort = null): array
    {
        $sql = "select products.*,category_name,brand_name from products
        left join categories on products.category_id = categories.category_id
        left join brands on products.brand_id = brands.brand_id";
        if ($sort != '' && $sort != '0')
            $sql .= " order by price " . $sort;
        $result = (new Connect())->excuteQuery($sql);

        $arr = [];
        foreach ($result as $each) {
            $object = new ProductObject($each);

            $arr[] = $object;
        }
        return $arr;
    }

    public function findByCategoryId($category, $sort): array
    {
        $sql = "select products.*,category_name,brand_name from products
        left join categories on products.category_id = categories.category_id
        left join brands on products.brand_id = brands.brand_id
        where products.category_id = $category";
        if ($sort != '' && $sort != '0')
            $sql = $sql . " order by price " . $sort;
        $result = (new Connect())->excuteQuery($sql);

        $arr = [];
        foreach ($result as $each) {
            $object = new ProductObject($each);

            $arr[] = $object;
        }

        return $arr;
    }

    public function findByBrandId($brand, $sort): array
    {
        $sql = "select products.*,category_name,brand_name from products
        left join categories on products.category_id = categories.category_id
        left join brands on products.brand_id = brands.brand_id
        where products.brand_id = $brand";
        if ($sort != '' && $sort != '0')
            $sql = $sql . " order by price " . $sort;
        $result = (new Connect())->excuteQuery($sql);

        $arr = [];
        foreach ($result as $each) {
            $object = new ProductObject($each);

            $arr[] = $object;
        }

        return $arr;
    }

    public function findByCategoryAndBrandId($category, $brand, $sort): array
    {
        $sql = "select products.*,category_name,brand_name from products
        left join categories on products.category_id = categories.category_id
        left join brands on products.brand_id = brands.brand_id
        where products.category_id = $category and products.brand_id = $brand";
        if ($sort != '' && $sort != '0')
            $sql = $sql . " order by price " . $sort;
        $result = (new Connect())->excuteQuery($sql);

        $arr = [];
        foreach ($result as $each) {
            $object = new ProductObject($each);

            $arr[] = $object;
        }

        return $arr;
    }

    public function create($params1, $params2): void
    {
        $object = new ProductObject($params1, $params2);
        $sql = "insert into products (product_name, image, category_id, brand_id, weight, price, element, benefit)
        values('" . $object->getProductName() . "','" . $object->getImage() . "'," . $object->getCategoryId() . "," . $object->getBrandId() . "," . $object->getWeight() . "," . $object->getPrice() . ",'" . $object->getElement() . "','" . $object->getBenefit() . "')";
        (new Connect())->excuteNonQuery($sql);
    }

    public function find($id): object
    {
        $sql = "select * from products where product_id = $id";
        $result = (new Connect())->excuteQuery($sql);
        $each = mysqli_fetch_array($result);
        return new ProductObject($each);
    }

    public function update($params1, $params2 = null): void
    {
        $object = new ProductObject($params1, $params2);
        $sql = "update products set product_name = '" . $object->getProductName() . "', image = '" . $object->getImage() . "', category_id = " . $object->getCategoryId() . ", brand_id = " . $object->getBrandId() . ", weight = " . $object->getWeight() . ",price = " . $object->getPrice() . ",element = '" . $object->getElement() . "',benefit = '" . $object->getBenefit() . "' where product_id = " . $object->getProductId();
        (new Connect())->excuteNonQuery($sql);
    }

    public function delete($id): void
    {
        $sql = "delete from products where product_id = " . $id;
        (new Connect())->excuteNonQuery($sql);
    }
}
