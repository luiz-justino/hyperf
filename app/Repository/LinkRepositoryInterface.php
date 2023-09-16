<?php

namespace App\Repository;

use App\Model\Link;

interface LinkRepositoryInterface
{
    public function create(Link $link): Link;
    public function list(): ?Link;
    public function show(int $id): Link;
    public function update(int $id, array $data): Link;
    public function delete(int $id): bool;
}