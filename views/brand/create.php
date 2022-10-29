<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm hãng sữa mới</h2>
        </div>
        <div class="card-body">
            <form action="?action=store_b" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên hãng sữa</label>
                    <input type="text" name="brand_name" class="form-control" required>
                </div>
                <button type="submit" name="sbm" class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.title = "Thêm hãng sữa mới";
</script>