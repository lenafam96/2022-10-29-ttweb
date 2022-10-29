<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Quản lý khách hàng</h2>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên khách hàng</th>
                        <th>Giới tính</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Sửa</th>
                        <th>Xoá</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($arr as $each) : ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $each->getCustomerName(); ?></td>
                            <td><?php echo $each->showGender(); ?></td>
                            <td><?php echo $each->getAddress(); ?></td>
                            <td><?php echo $each->getPhone(); ?></td>
                            <td><?php echo $each->getEmail(); ?></td>
                            <td>
                                <a href="index.php?action=edit_cu&id=<?php echo $each->getCustomerId(); ?>">Sửa</a>
                            </td>
                            <td>
                                <a onclick="return Del('<?php echo $each->getCustomerName(); ?>')" href="index.php?action=delete_cu&id=<?php echo $each->getCustomerId(); ?>">Xoá</a>
                            </td>
                        <?php endforeach ?>
                </tbody>
            </table>
            <a class='btn btn-primary' href="index.php?action=create_cu">Thêm mới</a>
        </div>
    </div>
</div>

<script>
    document.title = "Quản lý khách hàng";

    function Del(name) {
        return confirm("Bạn có chắc chắn muốn xoá khách hàng: " + name + " ?");
    }
</script>