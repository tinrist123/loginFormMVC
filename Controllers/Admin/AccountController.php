<?php
class Controllers_Admin_AccountController extends Controllers_baseController
{
    public function ViewAccount()
    {
        $db = new Models_DBConnection();
        $sql = "SELECT * FROM khachhang K,taikhoan T WHERE T.idtaikhoan = K.idtaikhoan";
        $data = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $this->redirectView('AdminView/ViewAccount', $data);
    }
}
