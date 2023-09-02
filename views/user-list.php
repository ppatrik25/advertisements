<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <link rel="stylesheet" type="text/css" href="views/style.css">
</head>
<body>
    <h1>User List</h1>
    <!-- Display users here -->
<?php
    require_once '../models/UserModel.php';
    $controller = new UserModel();
    $controller->getAllUsers();
?>
</body>
</html>
