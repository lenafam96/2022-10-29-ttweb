<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Quản lý hãng sản phẩm</h2>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Hãng sản phẩm</th>
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
                            <td><?php echo $each->getBrandName(); ?></td>
                            <td>
                                <a href="index.php?action=edit_b&id=<?php echo $each->getBrandId(); ?>">Sửa</a>
                            </td>
                            <td>
                                <a onclick="return Del('<?php echo $each->getBrandName(); ?>')" href="index.php?action=delete_b&id=<?php echo $each->getBrandId(); ?>">Xoá</a>
                            </td>
                        <?php endforeach ?>
                </tbody>
            </table>
            <a class='btn btn-primary' href="?action=create_b">Thêm mới</a>
        </div>
    </div>
</div>

<script>
    document.title = "Quản lý hãng sữa";

    function Del(name) {
        return confirm("Bạn có chắc chắn muốn xoá hãng sữa: " + name + " ?");
    }
</script>