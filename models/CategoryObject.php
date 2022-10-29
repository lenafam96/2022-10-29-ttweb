<?php

class CategoryObject
{
    private int $categoryId;
    private string $categoryName;

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

    public function __construct($each)
    {
        $this->categoryId = $each['category_id'] ?? -1;
        $this->categoryName = $each['category_name'];
    }
}
