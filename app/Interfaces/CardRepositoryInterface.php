<?php

namespace App\Interfaces;

interface CardRepositoryInterface
{

    public function storeCard($data);

    public function updateCard($data, string $id);

    public function deleteCard($data);

    public function listCard($data);

    public function detailCard($data);

    public function checkCard($data): bool;
}
