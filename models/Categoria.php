<?php
class Categoria extends Conectar
{

    public function get_categoria()
    {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "SELECT cat_id as ID, cat_nom as Categoria, cat_obs as Observacion, est as Estado FROM tb_categoria WHERE est=1";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_categoria_by_id($cat_id)
    {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "SELECT cat_id as ID, cat_nom as Categoria, cat_obs as Observacion, est as Estado FROM tb_categoria WHERE est=1 AND cat_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_id);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert_categoria($cat_nom,$cat_obs)
    {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "INSERT INTO tb_categoria (`cat_id`, `cat_nom`, `cat_obs`, `est`) values (NULL, ?, ?, '1')";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_nom);
        $sql->bindValue(2, $cat_obs);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function update_categoria($cat_nom,$cat_obs, $cat_id)
    {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "UPDATE tb_categoria SET cat_nom = ?, cat_obs = ? WHERE cat_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_nom);
        $sql->bindValue(2, $cat_obs);
        $sql->bindValue(3, $cat_id);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete_categoria($cat_id)
    {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "UPDATE tb_categoria SET est = 0 WHERE cat_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_id);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}


?>