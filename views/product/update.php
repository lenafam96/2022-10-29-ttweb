<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Cập nhật thông tin sản phẩm</h2>
        </div>
        <div class="card-body">
            <form action="?action=update" method="post" enctype="multipart/form-data">
                <input type="hidden" name="product_id" class="form-control" required value="<?php echo $each->getProductId(); ?>">
                <input type="hidden" name="img_old" class="form-control" value="<?php echo $each->getImage(); ?>">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="product_name" class="form-control" required value="<?php echo $each->getProductName(); ?>">
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Loại sản phẩm</label>
                    <select name="category_id" class="form-control" required>
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?php echo $category->getCategoryId(); ?>" <?php if ($each->getCategoryId() === $category->getCategoryId()) echo "selected"; ?>>
                                <?php echo $category->getCategoryName(); ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Hãng sữa</label>
                    <select name="brand_id" class="form-control" required>
                        <?php foreach ($brands as $brand) : ?>
                            <option value="<?php echo $brand->getBrandId(); ?>" <?php if ($each->getBrandId() === $brand->getBrandId()) echo "selected"; ?>>
                                <?php echo $brand->getBrandName(); ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Trọng lượng</label>
                    <input type="number" name="weight" class="form-control" min="0" required value="<?php echo $each->getWeight(); ?>">
                </div>
                <div class="form-group">
                    <label for="">Giá bán</label>
                    <input type="number" name="price" min="0" class="form-control" required value="<?php echo $each->getPrice(); ?>">
                </div>
                <div class="form-group">
                    <label for="">Thành phần dinh dưỡng</label>
                    <textarea type="text" name="element" class="form-control" required><?php echo $each->getElement(); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="">Lợi ích</label>
                    <textarea type="text" name="benefit" class="form-control" required><?php echo $each->getBenefit(); ?></textarea>
                </div>
                <button type="submit" name="sbm" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>


<script>
    document.title = "Cập nhật thông tin sản phẩm";
</script>