<div class="card">
    <!-- <div id="demo" class="banner carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
            <li data-target="#demo" data-slide-to="5"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href=""><img src="img/banner1.jpg" alt=""></a>
            </div>
            <div class="carousel-item">
                <a href=""><img src="img/banner2.jpg" alt=""></a>
            </div>
            <div class="carousel-item">
                <a href=""><img src="img/banner3.jpg" alt=""></a>
            </div>
            <div class="carousel-item">
                <a href=""><img src="img/banner4.jpg" alt=""></a>
            </div>
            <div class="carousel-item">
                <a href=""><img src="img/banner5.jpg" alt=""></a>
            </div>
            <div class="carousel-item">
                <a href=""><img src="img/banner6.jpg" alt=""></a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div> -->
    <div class="card-header">
        <h3 id="title"><?php echo $title; ?></h3>
        <form action="<?php
                        $params = $category ? "?category=$category" : "";
                        if ($brand)
                            $params .= $params ? "&brand=$brand" : "?brand=$brand";
                        echo $params; ?>" method="post">
            <div>
                <select name="sort" id="sort-box" onchange="this.form.submit()">
                    <option value="0" <?php if ($sort === '0') echo "selected"; ?>>Mặc định</option>
                    <option value="asc" <?php if ($sort === 'asc') echo "selected"; ?>>Giá từ thấp đến cao</option>
                    <option value="desc" <?php if ($sort === 'desc') echo "selected"; ?>>Giá từ cao đến thấp</option>
                </select>
            </div>
        </form>
    </div>
    <div class="card-body">
        <section class="products">
            <?php
            foreach ($arr as $each) : ?>
                <section class="product">
                    <section class="img"><a href=""><img src="img/<?php echo $each->getImage(); ?>" alt=""></a></section>
                    <a href="" class="product-info">
                        <div>
                            <section class="name"><?php echo $each->getProductName(); ?></section>
                        </div>
                        <section class="price"><?php echo $each->showPrice(); ?></section>
                    </a>
                </section>
            <?php endforeach ?>
        </section>
    </div>
</div>

<script>
    document.title = document.getElementById('title').innerText;
</script>