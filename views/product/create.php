<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm sản phẩm mới</h2>
        </div>
        <div class="card-body">
            <form action="?action=store" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="product_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Loại sản phẩm</label>
                    <select name="category_id" class="form-control" required>
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?php echo $category->getCategoryId(); ?>">
                                <?php echo $category->getCategoryName(); ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Hãng sữa</label>
                    <select name="brand_id" class="form-control" required>
                        <?php foreach ($brands as $brand) : ?>
                            <option value="<?php echo $brand->getBrandId(); ?>">
                                <?php echo $brand->getBrandName(); ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Trọng lượng</label>
                    <input type="number" name="weight" class="form-control" min="0" required>
                </div>
                <div class="form-group">
                    <label for="">Giá bán</label>
                    <input type="number" name="price" min="0" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Thành phần dinh dưỡng</label>
                    <textarea type="text" name="element" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="">Lợi ích</label>
                    <textarea type="text" name="benefit" class="form-control" required></textarea>
                </div>
                <button type="submit" name="sbm" class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.title = "Thêm sản phẩm mới";
</script>