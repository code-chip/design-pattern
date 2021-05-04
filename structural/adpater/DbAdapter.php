<?php

interface DbAdapter
{
    public function insert();

    public function query();

    public function update();

    public function delete();
}