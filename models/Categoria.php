<?php
class Categoria extends Conectar
{

    public function get_categoria()
    {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "SELECT * FROM tb_categoria WHERE est=1";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_categoria_by_id($cat_id)
    {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "SELECT * FROM tb_categoria WHERE est=1 AND cat_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_id);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}


?>