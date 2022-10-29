<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm khách hàng mới</h2>
        </div>
        <div class="card-body">
            <form action="?action=store_cu" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên khách hàng</label>
                    <input type="text" name="customer_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Giới tính</label><br>
                    <input type="radio" name="gender" value="0" required>&nbsp;Nam&nbsp;&nbsp;
                    <input type="radio" name="gender" value="1">&nbsp;Nữ
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="address" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="tel" name="phone" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <button type="submit" name="sbm" class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.title = "Thêm khách hàng mới";
</script>