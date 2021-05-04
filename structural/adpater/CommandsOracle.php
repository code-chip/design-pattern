<?php

require_once 'DbAdapter.php';

class CommandsOracle implements DbAdapter
{

    public function insert()
    {
        echo "Insert method Oracle database";
    }

    public function query()
    {
        echo "Query method Oracle database";
    }

    public function update()
    {
        echo "Update method Oracle database";
    }

    public function delete()
    {
        echo "Delete method Oracle database";
    }
}