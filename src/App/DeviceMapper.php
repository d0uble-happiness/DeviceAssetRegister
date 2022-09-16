<?php

// namespace App;

class DeviceMapper
{
    public function __construct( # PHP 8 construct
        private \PDO $pdo,
    ) {
    }

    public function getById(int $assetTag)
    {

    }

    public function getAll()
    {
        $sql = 'SELECT * FROM devices';
        $result = $this->pdo->query($sql);

        if (! $result) {
            return false;
        }

        return $result->fetchAll();
    }

    public function create(array $data)
    {

    }

    public function update(int $assetTag, array $data)
    {

    }

    public function delete(int $assetTag)
    {

    }
}