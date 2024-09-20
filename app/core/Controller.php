<?php
class Controller {
     public function view($view, $data = [])
     {
        extract($data);
        require_once 'views/' . $view . '.php';
     }

     public function model($model)
     {
        require_once 'app/models/' . $model . '.php';
        return new $model;
     }
}