<?php
require_once 'models/Customer.php';

class CustomerController
{
    public function index()
    {
        $arr = (new Customer())->all();
        require_once 'views/customer/index.php';
    }

    public function create(): void
    {
        require 'views/customer/create.php';
    }

    public function store(): void
    {
        (new Customer())->create($_POST);

        (new Controller())->myHeader("index.php");
    }

    public function edit(): void
    {
        $id = $_GET['id'];
        $each = (new Customer())->find($id);

        require 'views/customer/update.php';
    }

    public function update(): void
    {
        (new Customer())->update($_POST);

        (new Controller())->myHeader("index.php");
    }

    public function delete(): void
    {
        (new Customer())->delete($_GET['id']);

        (new Controller())->myHeader("index.php");
    }

    public function check($action)
    {
        if (isset($_SESSION['email']))
            $this->$action();
        else (new Controller())->myHeader("views/404.php");
    }
}
