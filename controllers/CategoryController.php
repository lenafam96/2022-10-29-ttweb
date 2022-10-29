<?php

class CategoryController
{
    public function index()
    {
        require_once 'models/Category.php';
        $arr = (new Category())->all();
        require_once 'views/category/index.php';
    }

    public function create(): void
    {
        require 'views/category/create.php';
    }

    public function store(): void
    {
        (new Category())->create($_POST);

        (new Controller())->myHeader("index.php");
    }

    public function edit(): void
    {
        $id = $_GET['id'];
        require_once 'models/Category.php';
        $each = (new Category())->find($id);

        require 'views/category/update.php';
    }

    public function update(): void
    {
        (new Category())->update($_POST);

        (new Controller())->myHeader("index.php");
    }

    public function delete(): void
    {
        (new Category())->delete($_GET['id']);

        (new Controller())->myHeader("index.php");
    }

    public function check($action)
    {
        if (isset($_SESSION['email']))
            $this->$action();
        else (new Controller())->myHeader("views/404.php");
    }
}
