<?php 

class Categorie{

    private $con;
    public $name;
    public function __construct(Conexion $con)
    {
        $this->con = $con;
    }

    public function setName($name) {
        $this->name = $this->con->real_escape_string($name);
    }

    public function insert() {
        $query = "INSERT INTO `categoria` (`categoria`) VALUES ('$this->name')";
        $this->con->query($query);
        if ($this->con->query($query))
            return true;
        return false;
    }
}