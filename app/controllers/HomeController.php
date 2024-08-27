<?php
// app/controllers/HomeController.php

class HomeController {
    public function index() {
        //load associated view
        require_once '../app/views/home/index.php';
    }
}
