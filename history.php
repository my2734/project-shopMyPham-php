<div class="container" style="background-color: #fff !important;border-radius: 5px !important;padding-bottom: 100px !important;box-shadow: 0 10px 10px rgb(0 0 0 / 30%) !important;">

    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Họ tên người nhận</th>
                            <th>Địa chỉ nhận hàng</th>
                            <th>Số điện thoại</th>
                            <th>Thời gian</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_SESSION["user"])) {

                            $user_id = $_SESSION["user"]["user_id"];
                            $sql_select_order = "select * from tbl_order where user_id = '$user_id'";
                            $i = 0;
                            $result_select_order = mysqli_query($conn, $sql_select_order);
                            $row_select_order = mysqli_fetch_assoc($result_select_order);
                            while ($row_select_order = mysqli_fetch_assoc($result_select_order)) {
                                $i = $i + 1;
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $i ?></th>
                                    <td><?php echo $row_select_order["user_name"] ?></td>
                                    <td><?php echo $row_select_order["user_adress"] ?></td>
                                    <td><?php echo $row_select_order["user_phone"] ?></td>
                                    <td><?php echo $row_select_order["order_create_date"] ?></td>
                                    <td>
                                        <button class="btn btn--primary" style="border: none; color: #fff;outline: none;background-color: #4aa2bb; color: #fff; text-decoration: none;"><a href="index.php?page=detail_order&order_id=<?php echo $row_select_order["order_id"] ?>">Xem chi tiết</a></button>
                                    </td>
                                </tr>
                        <?php  }
                        }
                        ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>