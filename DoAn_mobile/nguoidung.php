<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Thế giới điện thoại</title>
	<link rel="shortcut icon" href="img/favicon.ico" />

	<!-- Load font awesome icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

	<!-- Jquery -->
	<script src="lib/Jquery/Jquery.min.js"></script>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	

	<!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

	<!-- our files -->
	<!-- css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/topnav.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/taikhoan.css">
	<link rel="stylesheet" href="css/gioHang.css">
	<link rel="stylesheet" href="css/nguoidung.css">
	<link rel="stylesheet" href="css/footer.css">
	<!-- js -->
	<script src="js/dungchung.js"></script>
	<script src="js/nguoidung.js"></script>

	<?php require_once "php/echoHTML.php"; ?>
</head>

<body>
	<?php addTopNav(); ?>

	<section>
		<?php addHeader(); ?>
		<div class="infoUser">
	<!-- // require_once ("../BackEnd/ConnectionDB/DB_classes.php");

	// if (isset($_SESSION['currentUser'])) {
	// 	$manguoidung = $_SESSION['currentUser']['MaND'];
	
	// 	$sql="SELECT * FROM nguoidung WHERE MaND=$manguoidung";
	
    //     $dsdh=(new DB_driver())->get_list($sql);

    //         foreach($dsdh as $row)
    //         {
    //         $username = "username";
    //         $ho = "ho";
    //         $ten = "ten";
    //         $email = "email";
    //         $tongTienTatCaDonHang = 0;
    //         $tongSanPhamTatCaDonHang = 0; -->
            echo '
            <hr>
            <table>
                <tr>
                    <th colspan="3">THÔNG TIN KHÁCH HÀNG</th>
                </tr>
                <tr>
                    <td>Tài khoản: </td>
                    <td> <input type="text" value="'.$row['TaiKhoan'].'" readonly> </td>
                    <td> <i class="fa fa-pencil" onclick="changeInfo(this,'.$username.')"></i> </td>
                </tr>
                <tr>
                    <td>Mật khẩu: </td>
                    <td style="text-align: center;"> 
                        <i class="fa fa-pencil" id="butDoiMatKhau" onclick="openChangePass()"> Đổi mật khẩu</i> 
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3" id="khungDoiMatKhau">
                        <table>
                            <tr>
                                <td> <div>Mật khẩu cũ:</div> </td>
                                <td> <div><input type="password"></div> </td>
                            </tr>
                            <tr>
                                <td> <div>Mật khẩu mới:</div> </td>
                                <td> <div><input type="password"></div> </td>
                            </tr>
                            <tr>
                                <td> <div>Xác nhận mật khẩu:</div> </td>
                                <td> <div><input type="password"></div> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td> 
                                    <div><button onclick="changePass()">Đồng ý</button></div> 
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Họ: </td>
                    <td> <input type="text" value="'.$row['Ho'].'" readonly> </td>
                    <td> <i class="fa fa-pencil" onclick="changeInfo(this, '.$ho.')"></i> </td>
                </tr>
                <tr>
                    <td>Tên: </td>
                    <td> <input type="text" value="'.$row['tTen'].' " readonly> </td>
                    <td> <i class="fa fa-pencil" onclick="changeInfo(this, '.$ten.')"></i> </td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td> <input type="text" value="'.$row['Email'].' 
            " readonly> </td>
                    <td> <i class="fa fa-pencil" onclick="changeInfo(this, '.$email.')"></i> </td>
                </tr>
                <tr>
                    <td colspan="3" style="padding:5px; border-top: 2px solid #ccc;"></td>
                </tr>
                <tr>
                    <td>Tổng tiền đã mua: </td>
                    <td> <input type="text" value=" 
            numToString('.$tongTienTatCaDonHang.')
            ₫" readonly> </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Số lượng sản phẩm đã mua: </td>
                    <td> <input type="text" value="'.$tongSanPhamTatCaDonHang.'
            " readonly> </td>
                    <td></td>
                </tr>
            </table>';
        <!-- //     }
        // }
		// else
		// 	echo 'erro';

// -->

		</div>
		<div class="listDonHang"> </div>
		

		<div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				    <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel" >Chi tiết đơn hàng</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
				          <span aria-hidden="true">&times;</span>
				        </button>
				    </div>
				<div class="modal-body" id="chitietdonhang"></div>
				<div class="modal-footer">
		        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
		        	<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
		      	</div>
		    	</div>
		  	</div>
		</div>
		
	</section> <!-- End Section -->
	<?php 
		addContainTaiKhoan();
		addPlc(); 
	?>

	<div class="footer">
		<?php addFooter(); ?>
	</div>

	<i class="fa fa-arrow-up" id="goto-top-page" onclick="gotoTop()"></i>
</body>

</html>