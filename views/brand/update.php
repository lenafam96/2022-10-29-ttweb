<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Cập nhật thông tin hãng</h2>
        </div>
        <div class="card-body">
            <form action="?action=update_b" method="post" enctype="multipart/form-data">
                <input type="hidden" name="brand_id" class="form-control" required value="<?php echo $each->getBrandId(); ?>">
                <div class="form-group">
                    <label for="">Tên hãng sữa</label>
                    <input type="text" name="brand_name" class="form-control" value="<?php echo $each->getBrandName(); ?>" required>
                </div>
                <button type="submit" name="sbm" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.title = "Cập nhật hãng sữa";
</script>