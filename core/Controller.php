<?php
// core/Controller.php

class Controller {
    // Cette méthode peut être utilisée pour charger un modèle
    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    // Cette méthode charge la vue
    public function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }
}
