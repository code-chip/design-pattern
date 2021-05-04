<?php

require_once 'DbAdapter.php';

class CommandsMySQLAdapter implements DbAdapter
{
    private $commands;

    public function __construct(CommandsMySQL $commands)
    {
        $this->commands = $commands;
    }

    public function insert()
    {
        $this->commands->insertMySQL();
    }

    public function query()
    {
        $this->commands->queryMySQL();
    }

    public function update()
    {
        $this->commands->updateMySQL();
    }

    public function delete()
    {
        $this->commands->deleteMySQL();
    }
}