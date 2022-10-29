<?php
require_once 'models/Brand.php';
$BrandArr = (new Brand())->all();
$category = $_GET['category'] ?? '';
?>

<ul class="nav-ul" id="nav-left">
    <?php foreach ($BrandArr as $each) : ?>
        <li class="nav-li">
            <div class="nav-box">
                <a class="nav-link" href="?<?php echo ($category ? "category=$category&" : "") . "brand=" . $each->getBrandId(); ?>"><?php echo $each->getBrandName(); ?></a>
            </div>
        </li>
    <?php endforeach; ?>
</ul>