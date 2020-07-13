<?php

$db = new Models_DBConnection();
class Controllers_Admin_DonhangController extends Controllers_baseController
{
    public function ViewDonHang()
    {
        $sql = "SELECT D.iddathang,D.idkhachhang,T.email,T.Ho,T.Ten,K.SDT,D.diachi,D.thanhpho,D.huyen,D.thanhtien,D.tienship,D.trigia,D.ngaydat FROM dathang D,khachhang K,taikhoan T WHERE D.idkhachhang = K.idkhachhang AND K.idtaikhoan = T.idtaikhoan
";
        $db = new Models_DBConnection();

        $donhang = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        $this->redirectView('AdminView/ViewDonHang', $donhang);
    }
}
