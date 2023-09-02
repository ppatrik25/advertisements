<?php
require_once '../models/AdvertisementModel.php';

class AdvertisementController {
    public function list() {
        $ads = AdvertisementModel::getAllAdvertisements();
        require '../views/ad-list.php';
    }
}
