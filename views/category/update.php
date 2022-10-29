<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Cập nhật thông tin danh mục</h2>
        </div>
        <div class="card-body">
            <form action="?action=update_c" method="post" enctype="multipart/form-data">
                <input type="hidden" name="category_id" class="form-control" required value="<?php echo $each->getCategoryId(); ?>">
                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" name="category_name" class="form-control" value="<?php echo $each->getCategoryName(); ?>" required>
                </div>
                <button type="submit" name="sbm" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>


<script>
    document.title = "Cập nhật danh mục sữa";
</script>