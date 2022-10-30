<div class="container-fluid">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
        <form action="?action=search" method="post" enctype="multipart/form-data">
            <table class="table table-hover">
                <!-- <thead> -->
                    <tr>
                        <th colspan="5">
                            <h2>TÌM KIẾM THÔNG TIN SỮA</h2>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="5">
                            <span class="search-span">Loại sữa: </span>
                            <select name="category_id" required>
                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?php echo $category->getCategoryId(); ?>" <?php if ($categoryId == $category->getCategoryId()) echo "selected"; ?>>
                                        <?php echo $category->getCategoryName(); ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                            <span class="search-span"> Hãng sữa: </span>
                            <select name="brand_id" required>
                                <?php foreach ($brands as $brand) : ?>
                                    <option value="<?php echo $brand->getBrandId(); ?>" <?php if ($brandId == $brand->getBrandId()) echo "selected"; ?>>
                                        <?php echo $brand->getBrandName(); ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="5">
                            <span class="search-span">Tên sữa: </span>
                            <input type="text" name="product_name" required value="<?php echo $productName; ?>">
                            <button type="submit" name="sbm" class="btn btn-primary">Tìm kiếm</button>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="5">
                            <?php echo $title;?>
                        </th>
                    </tr>
                <!-- </thead> -->
                <!-- <thead>
                    <tr>
                        <th>#</th>
                        <th style="width:25%">Hình ảnh</th>
                        <th style="width:35%">Tên sản phẩm</th>
                        <th>Trọng lượng</th>
                        <th>Giá bán</th>
                        <th>Sửa</th>
                        <th>Xoá</th>
                    </tr>
                </thead> -->
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($arr as $each) : ?>
                        <tr>
                            <th colspan="5">
                                <span class="search-product-title"><?php echo $each->getProductName() . " - " . $each->getBrandName(); ?></span>
                            </th>
                        </tr>
                        <tr>
                            <td style="width:5%;"><?php echo $i++; ?></td>
                            <td style="width:30%;"><img src="img/<?php echo $each->getImage(); ?>" alt="" style="width:100%;"></td>
                            <td style="width:45%;">
                                <b><i>Thành phần dinh dưỡng: <br></i></b>
                                <?php echo $each->getElement(); ?>
                                <br><b><i>Lợi ích: <br></i></b>
                                <?php echo $each->getBenefit(); ?>
                                <br><b><i>Trọng lượng: </i></b>
                                <span id="index-product-span"><?php echo $each->showWeight(); ?></span>
                                <b><i> - Đơn giá: </i></b>
                                <span id="index-product-span"><?php echo $each->showPrice(); ?></span>
                            </td>
                            <td>
                                <a href="?action=edit&id=<?php echo $each->getProductId(); ?>">Sửa</a>
                            </td>
                            <td>
                                <a onclick="return Del('<?php echo $each->getProductName(); ?>')" href="?action=delete&id=<?php echo $each->getProductId(); ?>">Xoá</a>
                            </td>
                        <?php endforeach ?>
                </tbody>
            </table>
                    </form>
        </div>
    </div>
</div>

<script>
    document.title = "Quản lý sản phẩm";

    function Del(name) {
        return confirm("Bạn có chắc chắn muốn xoá sản phẩm: " + name + " ?");
    }
</script>