<?php

require_once 'controllers/CategoryController.php';
require_once 'controllers/BrandController.php';
require_once 'controllers/ProductController.php';
require_once 'controllers/CustomerController.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/Controller.php';
require_once 'controllers/Session.php';


$action = $_GET['action'] ?? 'home';
$category = $_GET['category'] ?? '';
$brand = $_GET['brand'] ?? '';
$sort = $_POST['sort'] ?? '';
switch ($action) {
    case 'home':
        (new HomeController())->index(category: $category, brand: $brand, sort: $sort);
        break;
    case 'login':
        (new HomeController())->login();
        break;
    case 'verification':
        (new HomeController())->verification();
        break;
    case 'logout':
        (new HomeController())->logout();
        break;
    case 'index_c':
    case 'create_c':
    case 'store_c':
    case 'edit_c':
    case 'update_c':
    case 'delete_c':
        (new CategoryController())->check(substr($action, 0, -2));
        break;
    case 'index_b':
    case 'create_b':
    case 'store_b':
    case 'edit_b':
    case 'update_b':
    case 'delete_b':
        (new BrandController())->check(substr($action, 0, -2));
        break;
    case 'index_cu':
    case 'create_cu':
    case 'store_cu':
    case 'edit_cu':
    case 'update_cu':
    case 'delete_cu':
        (new CustomerController())->check(substr($action, 0, -3));
        break;
    case 'index':
    case 'create':
    case 'store':
    case 'edit':
    case 'update':
    case 'delete':
        (new ProductController())->check($action);
        break;
    default:
        (new Controller())->goError();
}
