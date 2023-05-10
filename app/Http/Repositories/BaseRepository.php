<?php
namespace App\Http\Repositories;

use App\Http\Repositories;

abstract class BaseRepository implements RepositoryInterface {

    protected $model;

    function __construct()
    {
        $this->setModel();
    }

    public function getModel() {}

    public function setModel() {
        $this->model = app()->make($this->getModel());
    }

    public function selectAll() {
        return $this->model::all();
    }

    public function find($id) {
        return $this->model::find($id);
    }

    public function edit($id,$updateValue) {
        $request = $this->model::find($id);

        if($request) {
            $request->update($updateValue);
            return $request;
        }
    }

    public function create($createValue) {
        $model = new $this->model;
        foreach($createValue as $k => $v) {
            $model->$k = $v;
        }
        $model->save();
    }
}