<?php
//! @author: Federico Barcelona Auria
class fsql
{
    function fsql($host, $user, $pass, $db)
    {
        $dsn = 'mysql:dbname='.$db.';host='.$host;
        try {
            $this->pdo = new PDO($dsn, $user, $pass);
        } catch (PDOException $e) {
            echo('Fallo la conexion: ' . $e->getMessage());
            return NULL;
        }
        return $this;
    }

    function execute($query, $array = NULL)
    {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($array);
        $resultado = $stmt->fetchAll();
        return $resultado;
    }
}
?>
