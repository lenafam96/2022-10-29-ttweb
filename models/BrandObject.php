<?php

class BrandObject
{
    private int $brandId;
    private string $brandName;

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

    public function __construct($each)
    {
        $this->brandId = $each['brand_id'] ?? -1;
        $this->brandName = $each['brand_name'];
    }
}
