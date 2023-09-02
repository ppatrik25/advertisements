<!DOCTYPE html>
<html>
<head>
    <title>Advertisement List</title>
    <link rel="stylesheet" type="text/css" href="views/style.css">
</head>
<body>
    <h1>Advertisement List</h1>
    <!-- Display advertisements here -->
<?php
    require_once '../models/AdvertisementModel.php';
    $controller = new AdvertisementModel();
    $controller->getAllAdvertisements();
?>
</body>
</html>
