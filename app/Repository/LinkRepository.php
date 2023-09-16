<?php

namespace App\Repository;

use App\Model\Link;

class LinkRepository implements LinkRepositoryInterface
{

    public function create(Link $link): Link
    {
        // TODO: Implement create() method.
    }

    public function list(): ?Link
    {
        return Link::all();
    }

    public function show(int $id): Link
    {
        return Link::find($id);
    }

    public function update(int $id, array $data): Link
    {
        return Link::query()->where('id', $id)->update($data);
    }

    public function delete(int $id): bool
    {
        return Link::destroy($id);
    }
}