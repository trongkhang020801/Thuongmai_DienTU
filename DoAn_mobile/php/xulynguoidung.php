<?php
	require_once ("../BackEnd/ConnectionDB/DB_classes.php");
	session_start();

	if (isset($_SESSION['currentUser'])) {
		$manguoidung = $_SESSION['currentUser']['MaND'];
	
		$sql="SELECT * FROM nguoidung WHERE MaND=$manguoidung";
	
        $dsdh=(new DB_driver())->get_list($sql);

        if (sizeof($dsdh)>0)
        {
            foreach($dsdh as $row)
            {
            $username = "username";
            $ho = "ho";
            $ten = "ten";
            $email = "email";
            $tongTienTatCaDonHang = 0;
            $tongSanPhamTatCaDonHang = 0;
            echo '
            <hr>
            <table>
                <tr>
                    <th colspan="3">THÔNG TIN KHÁCH HÀNG</th>
                </tr>
                <tr>
                    <td>Tài khoản: </td>
                    <td> <input type="text" value="'.$row['TaiKhoan']'" readonly> </td>
                    <td> <i class="fa fa-pencil" onclick="changeInfo(this,'.$username')"></i> </td>
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
            }
        }


    }




?>