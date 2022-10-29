<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Quản lý sản phẩm</h2>
        </div>
        <div class="card-body">
            <a class='btn btn-primary' href="?action=create">Thêm mới</a>
            <table class="table table-hover">
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
                                <?php echo $each->getProductName() . " - " . $each->getBrandName(); ?>
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
        </div>
    </div>
</div>

<script>
    document.title = "Quản lý sản phẩm";

    function Del(name) {
        return confirm("Bạn có chắc chắn muốn xoá sản phẩm: " + name + " ?");
    }
</script>