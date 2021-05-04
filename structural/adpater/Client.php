<?php
ini_set('display_errors', 1);
error_reporting(E_ERROR | E_WARNING | E_PARSE);

require_once 'CommandsMySQL.php';
require_once 'CommandsOracle.php';
require_once 'CommandsMySQLAdapter.php';
require_once 'DbAdapter.php';

$oracle = new CommandsOracle();
$oracle->insert();

$mysql = new CommandsMySQLAdapter(new CommandsMySQL());
$mysql->insert();
