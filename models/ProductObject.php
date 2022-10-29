<?php

class ProductObject
{
    private int $productId;
    private string $productName;
    private string $image;
    private int $categoryId;
    private string $categoryName;
    private int $brandId;
    private string $brandName;
    private int $weight;
    private int $price;
    private string $element;
    private string $benefit;

    public function getProductId()
    {
        return $this->productId;
    }

    public function setProductId($value)
    {
        $this->productId = $value;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    public function setProductName($value)
    {
        $this->productName = $value;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($value)
    {
        $this->image = $value;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function setCategoryId($value)
    {
        $this->categoryId = $value;
    }

    public function getCategoryName()
    {
        return $this->categoryName;
    }

    public function setCategoryName($value)
    {
        $this->categoryName = $value;
    }

    public function getBrandId()
    {
        return $this->brandId;
    }

    public function setBrandId($value)
    {
        $this->brandId = $value;
    }

    public function getBrandName()
    {
        return $this->brandName;
    }

    public function setBrandName($value)
    {
        $this->brandName = $value;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function showWeight()
    {
        return $this->weight . " gr";
    }

    public function setWeight($value)
    {
        $this->weight = $value;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function showPrice()
    {
        return number_format($this->price, 0) . " VNĐ";
    }

    public function setPrice($value)
    {
        $this->price = $value;
    }

    public function getElement()
    {
        return $this->element;
    }

    public function setElement($value)
    {
        $this->element = $value;
    }

    public function getBenefit()
    {
        return $this->benefit;
    }

    public function setBenefit($value)
    {
        $this->benefit = $value;
    }

    public function __construct($each, $files = null)
    {
        $this->productId = $each['product_id'] ?? -1;
        $this->productName = $each['product_name'];
        if ($files != null) {
            $this->image = $files['image']['name'];
            $image_tmp = $files['image']['tmp_name'];
            $check = move_uploaded_file($image_tmp, "img/$this->image");
        } else {
            $this->image = $each['image'] ?? $each['img_old'];
        }
        $this->categoryId = $each['category_id'] ?? -1;
        $this->categoryName = $each['category_name'] ?? '';
        $this->brandId = $each['brand_id'] ?? -1;
        $this->brandName = $each['brand_name'] ?? '';
        $this->weight = $each['weight'];
        $this->price = $each['price'];
        $this->element = $each['element'];
        $this->benefit = $each['benefit'];
    }
}
