<?php
namespace application\core;
use PDO;

class Model
{
    public $db;

    public function __construct()
    {
        $config = require APP_ROOT_DIR . '\application\config\db.php';
        $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'].';charset=utf8;', $config['user'], $config['password']);
    }

    public function query($sql, $params = []) {
        $stmt = $this->db->prepare($sql);
        if (!empty($params)) {
            foreach ($params as $key => $val) {
                $stmt->bindValue(':'.$key, (int) trim($val), PDO::PARAM_INT);
            }
        }
        $stmt->execute();
        return $stmt;
    }

    public function row($sql, $params = []) {
        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function column($sql, $params = []) {
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }

}