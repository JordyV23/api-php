<?php

class Conectar
{
    protected $dbh;

    protected function Conexion()
    {
        try {
            $conectar = $this->dbh = new PDO("mysql:host=127.0.0.1;dbname=webService", "jordy", "1234");
            return $conectar;
        } catch (Exception $e) {
            print "Erro en la db: " . $e->getMessage();
            die();
        }
    }

    public function set_names()
    {
        return $this->dbh->query("SET NAMES 'utf8'");
    }
}

?>