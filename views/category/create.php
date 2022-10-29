<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm danh mục mới</h2>
        </div>
        <div class="card-body">
            <form action="?action=store_c" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" name="category_name" class="form-control" required>
                </div>
                <button type="submit" name="sbm" class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.title = "Thêm danh mục sữa mới";
</script>