<?php

namespace Poo\Heritage\Manager;
use PDO;

abstract class EntityManager {
    private static $connexion = null;

    public static function setConnexion($connexion) {
        self::$connexion = $connexion;
    }

    public static function getConnexion() {
        return self::$connexion;
    }

    abstract public function create($entity);
    abstract public function read($id);
    abstract public function readAll();
    abstract public function update($entity);
    abstract public function delete($entity);
}