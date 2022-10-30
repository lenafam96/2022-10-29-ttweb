<?php
require_once 'models/Product.php';

class ProductController
{
    public function index(): void
    {
        $arr = (new Product())->all();

        require 'views/product/index.php';
    }

    public function create(): void
    {
        require_once 'models/Category.php';
        require_once 'models/Brand.php';
        $categories = (new Category())->all();
        $brands = (new Brand())->all();

        require 'views/product/create.php';
    }

    public function store(): void
    {
        (new Product())->create($_POST, $_FILES);

        (new Controller())->myHeader("index.php");
    }

    public function edit(): void
    {
        $id = $_GET['id'];
        require_once 'models/Category.php';
        require_once 'models/Brand.php';
        $categories = (new Category())->all();
        $brands = (new Brand())->all();
        $each = (new Product())->find($id);

        require 'views/product/update.php';
    }

    public function update(): void
    {
        if ($_FILES['image']['name'] != null) (new Product())->update($_POST, $_FILES);
        else (new Product())->update($_POST);
        (new Controller())->myHeader("index.php");
    }

    public function delete(): void
    {
        (new Product())->delete($_GET['id']);
        (new Controller())->myHeader("index.php");
    }

    public function search(): void
    {
        require_once 'models/Product.php';
        require_once 'models/Category.php';
        require_once 'models/Brand.php';
        $categoryId = $_POST['category_id']??'';
        $brandId = $_POST['brand_id']??'';
        $productName = $_POST['product_name']??'';
        $categories = (new Category())->all();
        $brands = (new Brand())->all();
        $arr = (new Product())->search($categoryId, $brandId, $productName);
        $title = "Có ".count($arr)." sản phẩm được tìm thấy";
        require 'views/product/search.php';
    }

    public function check($action)
    {
        // if (isset($_SESSION['email']))
        $this->$action();
        // else (new Controller())->myHeader("views/404.php");
    }
}
