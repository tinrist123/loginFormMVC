<?php
require_once 'bootstraps/bootstraps.php';

unset($_SESSION['admin']);
unset($_SESSION['idAdmin']);
unset($_SESSION['error']);

$logout = new Controllers_baseController();

$logout->redirectView('AdminView/loginAdmin');
