<?php
namespace App\Http\Controllers\Traits;
trait HasRestfulMethod{
    public function index()
    {
        return $this->service->index();
    }

    public function show(string $slug)
    {
        return $this->service->show($slug);
    }

    public function destroy(int $id)
    {
        return $this->service->destroy($id);
    }

    public function store()
    {
        // set request fro perform validation & authorization Form Request
        $this->setRequest();
        return $this->service->save($this->request);
    }

    public function update(Model $model)
    {
        // set request fro perform validation & authorization Form Request
        $this->setRequest();
        return $this->service->save($this->request,$model);
    }

}
