<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Cập nhật thông tin khách hàng mới</h2>
        </div>
        <div class="card-body">
            <form action="?action=update_cu" method="post" enctype="multipart/form-data">
                <input type="hidden" name="customer_id" class="form-control" required value="<?php echo $each->getCustomerId(); ?>">
                <div class="form-group">
                    <label for="">Tên khách hàng</label>
                    <input type="text" name="customer_name" class="form-control" value="<?php echo $each->getCustomerName(); ?>" required>
                </div>
                <div class="form-group">
                    <label for="">Giới tính</label><br>
                    <input type="radio" name="gender" value="0" <?php echo $each->getGender() === 0 ? "checked" : ""; ?> required>&nbsp;Nam&nbsp;&nbsp;
                    <input type="radio" name="gender" value="1" <?php echo $each->getGender() === 1 ? "checked" : ""; ?>>&nbsp;Nữ
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="address" class="form-control" value="<?php echo $each->getAddress(); ?>" required>
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="tel" name="phone" class="form-control" value="<?php echo $each->getPhone(); ?>" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $each->getEmail(); ?>" required>
                </div>
                <button type="submit" name="sbm" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.title = "Cập nhật thông tin khách hàng";
</script>