<?php

namespace Core;

use App\Core\DatabaseConnection;
use PDO;
use App\Config;

/**
 * Base model
 */
abstract class Model
{

    protected static function getDB()
    {
        return DatabaseConnection::getConnection();
    }
}
