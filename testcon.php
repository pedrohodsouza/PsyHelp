<?php

require 'app/models/Database.php';

use App\Models\Database;

$db = Database::getInstance()->getConnection();
echo "Conectado com sucesso!";
