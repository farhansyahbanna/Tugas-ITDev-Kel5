<?php

class HomeModel {
    private $table = 'client';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    

}