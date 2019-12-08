<?php
namespace app\core;

use PDO;

class Model {

    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;

        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($dsn, DB_USER, DB_PASS, $option);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    protected function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    protected function bind($param, $value, $type = null)
    {
        if( is_null($type) ) {
            switch( true ) {
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    protected function execute()
    {
        $this->stmt->execute();
    }

    protected function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    protected function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    protected function rowCount()
    {
        $this->execute();
        return $this->stmt->rowCount();
    }



}