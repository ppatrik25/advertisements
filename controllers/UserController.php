<?php
require_once '../models/UserModel.php';

class UserController {
    public function list() {
        $users = UserModel::getAllUsers();
        require "../views/user-list.php";
    }
}
