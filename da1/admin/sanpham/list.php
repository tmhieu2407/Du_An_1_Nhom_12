<div class="app-title">
    <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
    </ul>
    <div id="clock"></div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="row element-button">
                    <div class="col-sm-2">
                        <a class="btn btn-add btn-sm" href="index.php?act=addsp" title="Thêm"><i class="fas fa-plus"></i>
                            Tạo mới sản phẩm</a>
                    </div>
                </div>
                <div>
                    <form action="index.php?act=listsp" method="post">
                        <select name="iddm" id="" style="height: 26px; margin-left: 10px; border:solid 1px #dee2e6">
                            <option value="0" selected>Tất Cả</option>
                            <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="' . $id . '">' . $ten . '</option>';
                            }
                            ?>
                        </select>
                        <input style="width: 75%; float: left;border:solid 1px #dee2e6" type="text" name="kyw" id="">
                        <input style="width: 15%; float: right; background-color: blue; border:solid 1px #dee2e6" type="submit" name="listok" value="OK">
                    </form>
                </div>
                <!-- //form tìm kiếm -->
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Phong cách</th>
                            <th>Mô tả</th>
                            <th>Danh mục</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listsanpham as $sanpham) :
                            extract($sanpham);
                            // Giả sử ta không có thông tin $tongsoluong từ DB, ta có thể gán mặc định là 0 hoặc tính toán từ dữ liệu khác
                            $tongsoluong = 0;  // Giá trị mặc định nếu không có dữ liệu

                            $suasp = "index.php?act=update&id_sanpham=$id";
                        ?>
                            <tr>
                                <td><?= $id ?></td>
                                <td><?= $tensp ?></td>
                                <td><img src="../upload/<?= $hinh ?>" width="58" /></td>
                                <td><?= $soluong ?></td>
                                <td><?= $gia ?></td>
                                <td>
                                    <?= $phongcach ?>
                                </td>
                                <td>
                                    <?= $mota?>
                                </td>
                                <td><?= $tendm ?></td>

                                <td>
                                    <a href="<?= $suasp ?>">
                                        <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fas fa-edit"></i></button>
                                    </a>
                                    <a href="index.php?act=xoasp&id_sanpham=<?= $id ?>" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?');"><button class="btn btn-danger btn-sm" title="Xóa"><i class="fas fa-trash"></i></button></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>