<?php
require_once 'models/Brand.php';

class BrandController
{
    public function index()
    {
        $arr = (new Brand())->all();
        require_once 'views/brand/index.php';
    }

    public function create(): void
    {
        require 'views/brand/create.php';
    }

    public function store(): void
    {
        (new Brand())->create($_POST);

        (new Controller())->myHeader("index.php");
    }

    public function edit(): void
    {
        $id = $_GET['id'];
        $each = (new Brand())->find($id);

        require 'views/brand/update.php';
    }

    public function update(): void
    {
        (new Brand())->update($_POST);

        (new Controller())->myHeader("index.php");
    }

    public function delete(): void
    {
        (new Brand())->delete($_GET['id']);

        (new Controller())->myHeader("index.php");
    }

    public function check($action)
    {
        if (isset($_SESSION['email']))
            $this->$action();
        else (new Controller())->myHeader("views/404.php");
    }
}
