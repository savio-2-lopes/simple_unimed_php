<?php

class Conexao
{
    private $user = 'root';
    private $pass = '';
    private $path = 'localhost';
    private $db = 'unimed';
    private $con;

    public function __construct()
    {
        $this->con = mysqli_connect($this->path, $this->user, $this->pass) or die("Connection Fail!" . mysqli_error($this->con));
        mysqli_select_db($this->con, $this->db) or die("Connection Fail!" . mysqli_error($this->con));
    }
    public function getCon()
    {
        return $this->con;
    }
}
