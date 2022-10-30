<?php
require_once 'controllers/Session.php';
require_once 'models/Category.php';
$categoryArr = (new Category())->all();
$brand = $_GET['brand'] ?? '';
$user = isset($_SESSION['email']) ?  $_SESSION['email'] : [];
?>
<div class="user_option_box">
    <div class="logo">
        <a href="index.php"><img src="https://media.bibomart.com.vn/media/logo/stores/1/logo-bbm.jpg.jpg" alt=""></a>
        <div class="change-area">
            <img src="https://www.sieuthiruoungoai.com/themes/ruoungoai/assets/img/icon-suport.png" alt="">
            <a class="ct-area">
                <span>Chăm sóc</br>khách hàng</span>
            </a>

            <div class="ct-hotline">
                <p>Holine:</br>
                    <strong>
                        <a href="tel:0889269284">0889.269.284</a>
                    </strong>
                </p>
                <p>TP. Vinh:</br>
                    <strong>
                        <a href="tel:0839929303">0839.929.303</a>
                    </strong>
                </p>
            </div>
        </div>
    </div>
    <a class="account">
        <?php
        // if (isset($user['email']))
        if (1) { ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="https://hasaki.vn/images/graphics/icon_header_2.svg" alt=""><?php
                                                                                                                                                    // echo $user['email']; 
                                                                                                                                                    echo "admin@gmail.com";
                                                                                                                                                    ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <!-- <li><a href="index.php?action=index_c">Quản lý loại sữa</a></li> -->
                    <!-- <li><a href="index.php?action=index_b">Quảng lý hãng sữa</a></li> -->
                    <li><a href="index.php?action=index">Quản lý sản phẩm</a></li>
                    <li><a href="index.php?action=album">Album ảnh gia đình</a></li>
                    <!-- <li><a href="index.php?action=logout">Đăng xuất</a></li> -->
                </ul>
            </li>
        <?php } else { ?>
            <a href="index.php?action=login" class="account-link"><img src="https://hasaki.vn/images/graphics/icon_header_2.svg" alt=""><button type="submit" name="sbm" class="btn btn-login btn-primary">Đăng nhập</button><b class="caret"></b></a>
        <?php } ?>
    </a>
</div>
<!-- <nav id="navbar_top" class="navbar navbar-expand-sm navbar-dark" style="background-color: #333; z-index: 100;">
    <div class="nav-container">
        <a class="navbar-brand" href="index.php">TRANG CHỦ</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <?php foreach ($categoryArr as $each) : ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo "?category=" . $each->getCategoryId() . ($brand ? "&brand=$brand" : ""); ?>"><?php echo $each->getCategoryName(); ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav> -->