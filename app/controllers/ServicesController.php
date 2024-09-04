<?php
// app/controllers/ServicesController.php

class ServicesController {
    public function index() {
        
        // Charger la vue des services
        require_once '../app/views/services/servicesIndex.php';
    }
}
