<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Quản lý danh mục sản phẩm</h2>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Loại sản phẩm</th>
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
                            <td><?php echo $each->getCategoryName(); ?></td>
                            <td>
                                <a href="index.php?action=edit_c&id=<?php echo $each->getCategoryId(); ?>">Sửa</a>
                            </td>
                            <td>
                                <a onclick="return Del('<?php echo $each->getCategoryName(); ?>')" href="index.php?action=delete_c&id=<?php echo $each->getCategoryId(); ?>">Xoá</a>
                            </td>
                        <?php endforeach ?>
                </tbody>
            </table>
            <a class='btn btn-primary' href="index.php?action=create_c">Thêm mới</a>
        </div>
    </div>
</div>

<script>
    document.title = "Quản lý loại sữa";

    function Del(name) {
        return confirm("Bạn có chắc chắn muốn xoá loại sữa: " + name + " ?");
    }
</script>