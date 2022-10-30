<?php

class HomeController
{
    public function index($category = null, $brand = null, $sort = null): void
    {
        require_once 'models/Product.php';
        require_once 'models/Category.php';
        $title = '';
        if ($category == null && $brand == null && $sort == null) {
            $arr = (new Product())->all();
            $title = 'SẢN PHẨM MỚI NHẤT';
        } else if ($category == null && $brand == null) {
            $arr = (new Product())->all($sort);
            $title = 'SẢN PHẨM MỚI NHẤT';
        } else if ($category == null) {
            $arr = (new Product())->findByBrandId($brand, $sort);
            $title = (new Brand())->find($brand)->getBrandName();
        } else if ($brand == null) {
            $arr = (new Product())->findByCategoryId($category, $sort);
            $title = (new Category())->find($category)->getCategoryName();
        } else {
            $arr = (new Product())->findByCategoryAndBrandId($category, $brand, $sort);
            $title = (new Category())->find($category)->getCategoryName();
            $title .= " - " . (new Brand())->find($brand)->getBrandName();
        }
        require 'views/Home.php';
    }

    public function login(): void
    {
        $message = '';
        require 'views/Login.php';
    }

    public function verification(): void
    {
        require_once 'models/Account.php';
        if ((new Account)->login($_POST) > 0) {
            $_SESSION['email'] = $_POST;
            (new Controller())->myHeader("index.php");
        } else {
            $message = "Email hoặc Password không đúng!";
            require 'views/Login.php';
        }
    }

    public function logout(): void
    {
        unset($_SESSION['email']);
        (new Controller())->myHeader("index.php");
    }

    public function album(): void
    {
        require 'views/album.php';
    }
}
