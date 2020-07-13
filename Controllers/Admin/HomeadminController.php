<?php


class Controllers_Admin_HomeadminController extends Controllers_baseController
{
    public function ViewHomeAdmin()
    {
        $this->redirectView('AdminView/admin');
    }
}
