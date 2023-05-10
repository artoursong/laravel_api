<?php
namespace App\Http\Repositories;

interface RepositoryInterface {
    public function selectAll();

    public function find($id);

    public function create($updateValue);

    public function update($id,$updateValue);

    public function delete($id);
}