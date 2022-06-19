<?php
if ($_GET["id"]) {
    $pro_id = $_GET["id"];
    $sql_select_detailt = "select p.*,size_name from tbl_size as s, tbl_product p where s.size_id=p.size_id and pro_id='$pro_id'";
    $result_select_detailt = mysqli_query($conn, $sql_select_detailt);
    if ($row_select_detailt = mysqli_fetch_assoc($result_select_detailt)) { ?>
        <div class="row">
            <div class="col-md-5 col-sm-12 col-12">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="grid__1-9-item">
                            <div class="main_im-product">
                                <img class="full-widtd" id="main_img" src="<?php echo $row_select_detailt["image"] ?>" style=" margin-bottom: 94px;" alt="">
                            </div>
                        </div>
                        <div class="grid__1-9">
                            <div class="grid__1-9-item">

                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <div class="col-md-7 col-sm-12 col-12">
                <h1 class="grid_4-6-item-name"><?php echo $row_select_detailt["pro_name"] ?></h2>
                    <p class="font16"><span class="font_strong">Thương hiệu:</span> khác | <span class="font_strong">Loại:</span> Còn hàng</p>
                    <p class="font16 margin20 text-bold" style="color: red"> <?php echo $row_select_detailt["pro_price"] ?> <u>đ</u> <strike style="color: rgb(160, 154, 154)">350.000 <u>đ</u></strike> </p>


                    <div class="row ">
                        <h4 class="footer__name">Mô tả sản phẩm</h2>
                            <p><?php echo $row_select_detailt["description"] ?></p>
                    </div>
                    <div class="separate" style="margin-bottom: 100px;"></div>


                    <ul class="list_dathang margin20">
                        <li class="item_dathang">
                            <ul class="list_icon-cong-tru">
                                <li class="item-cong-tru demo" style="background-color: #f2f2f2;" onclick="sub_product('add_input-text')">
                                    <i class="fa-solid fa-minus"></i>
                                </li>
                                <li class="item-cong-tru demo">
                                    <input class="item-cong-tru-input" style="background-color: #f2f2f2;" id="add_input-text" type="text" value=1>
                                </li>
                                <li class="item-cong-tru demo" style="background-color: #f2f2f2;" onclick="add_product('add_input-text')">
                                    <i class="fa-solid fa-plus"></i>
                                </li>
                            </ul>
                        </li>

                        <li class="item_dathang" onclick="addCart(<?php echo $_GET['id'] ?>) ">
                            <button class="btn1">Thêm vào giỏ</button>
                        </li>
                        <li class="item_dathang">
                            <a class=" btn1 btn1212" href="./index.php?page=cart_giohang">Mua hàng</a>
                        </li>
                    </ul>
                    <div class="mt94"></div>
            </div>
        </div>


<?php    }
}
?>